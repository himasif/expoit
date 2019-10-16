<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Registrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $participant = Registrant::WhereNull('company')->count();
        $participant_paid = Registrant::whereNull('company')->whereNull('verify_code')->count();
        $participant_verified = Registrant::whereNull('company')->whereNotNull('register_code')->count();
        $company = Registrant::WhereNotNull('company')->count();
        return view('admin.dashboard', compact('participant', 'company', 'participant_paid', 'participant_verified'));
    }

    public function expoParticipant()
    {
        return view('admin.participant');
    }

    public function companyParticipant()
    {
        return view('admin.company');
    }

    public function acceptPayment(Request $request)
    {
        $participant = Registrant::findOrFail($request->participant_id);
        $register_code = Str::random(8);
        $participant->update([
            'register_code' => $register_code,
            'status' => 3,
        ]);

        Mail::to($participant->email)->send(new TicketMail($participant->name, $register_code));
        return redirect()->back();
    }

    public function getAjaxParticipant()
    {
        $data = Registrant::whereNull('company')->get();
        foreach ($data as $i => $d) {
            $d->no = $i + 1;
        }
        return DataTables::of($data)
            ->addColumn('bukti', function ($q) {
                if (is_null($q->file)) {
                    return "Belum Upload Bukti";
                }
                return '
                    <a href="' . url('/storage/' . $q->file) . '" class="btn btn-success" target="_blank">Bukti</a>
                ';
            })
            ->addColumn('tanggal', function ($q) {
                return $q->created_at->format('d/M/Y');
            })
            ->addColumn('status', function ($q) {
                if ($q->status == 1) {
                    return "Belum Dibayar";
                } else if ($q->status == 2) {
                    return "Sudah Dibayar";
                } else if ($q->status == 3) {
                    return "Sudah Diverifikasi";
                }
            })
            ->addColumn('action', function ($q) {
                if ($q->status == 3) {
                    return $q->register_code . "<br> <button onclick=\"resendCode($q->id)\" class=\"btn btn-primary\">Kirim Ulang</button>";
                } else {
                    return '
                    <button onclick="acceptPayment(\'' . $q->id . '\')" class="btn btn-success">Terima</button>
		    <button onclick="deleteParticipant(\'' . $q->id . '\')" class="btn btn-danger">Hapus</button>
                ';
                }
            })
            ->addColumn('dikonfirmasi', function($q){
                return $q->updated_at->format('d/M/Y');
            })
            ->rawColumns(['bukti', 'action'])
            ->make(true);
    }

    public function getAjaxCompany()
    {
        $data = Registrant::whereNotNull('company')->get();
        foreach ($data as $i => $d) {
            $d->no = $i + 1;
        }
        return DataTables::of($data)
            ->make(true);
    }

    public function deleteParticipant(Request $request)
    {
        $participant = Registrant::findOrFail($request->participant_id)->delete();
        toastr()->success("Peserta Berhasil Dihapus");
        return redirect()->back();
    }

    public function resendCode(Request $request)
    {
        $participant = Registrant::findOrFail($request->participant_id);
        Mail::to($participant->email)->send(new TicketMail($participant->name, $participant->register_code));
        toastr()->success("Berhasil mengirim ulang");
        return redirect()->back();
    }
}
