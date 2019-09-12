<?php

namespace App\Http\Controllers;

use App\Registrant;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $participant = Registrant::WhereNull('company')->count();
        $company = Registrant::WhereNotNull('company')->count();
        return view('admin.dashboard', compact('participant', 'company'));
    }

    public function expoParticipant(){
        return view('admin.participant');
    }

    public function companyParticipant(){
        return view('admin.company');
    }

    public function getAjaxParticipant(){
        $data = Registrant::whereNull('company')->get();
        foreach ($data as $i => $d){
            $d->no = $i+1;
        }
        return DataTables::of($data)
            ->make(true);
    }

    public function getAjaxCompany(){
        $data = Registrant::whereNotNull('company')->get();
        foreach ($data as $i => $d){
            $d->no = $i+1;
        }
        return DataTables::of($data)
            ->make(true);
    }
}
