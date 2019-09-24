<?php

namespace App\Http\Controllers;

use App\Mail\RegisterParticipantMail;
use App\Registrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegistrantController extends Controller
{
    public function registerParticipant(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:191',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $code = Str::random(32);
        Registrant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'verify_code' => $code
        ]);

        Mail::to($request->email)->send(new RegisterParticipantMail($request->name, $code));
        toastr()->success('Terima kasih telah mendaftar EXPO-IT 2019, silahkan cek email anda');
        return redirect()->back();
    }

    public function registerCompany(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:191',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'company' => 'required|min:1|max:100'
        ]);
        Registrant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company
        ]);

        toastr()->success('Terima kasih telah mendaftar Stand EXPO-IT 2019');
        return redirect()->back();
    }

    public function upload(Request $request){
        $this->validate($request, [
            'code' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg'
        ]);

        $registrant = Registrant::where('verify_code', $request->code)->first();
        if(is_null($registrant)){
            toastr()->error('Kode tidak ditemukan');
            return redirect()->back();
        }

        $file = $request->file('file');
        $path = Storage::disk('public')->put('/uploads', $file);
        $registrant->update([
            'status' => 2,
            'verify_code' => null,
            'file' => $path,
        ]);

        toastr()->success('Upload berhasil, silahkan tunggu konfirmasi dari admin lewat email');
        return redirect()->back();
    }
}
