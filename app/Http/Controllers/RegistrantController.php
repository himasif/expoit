<?php

namespace App\Http\Controllers;

use App\Registrant;
use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    public function registerParticipant(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:191',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
        Registrant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        toastr()->success('Terima kasih telah mendaftar EXPO-IT 2019');
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
}
