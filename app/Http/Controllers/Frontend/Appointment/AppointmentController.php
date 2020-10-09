<?php

namespace App\Http\Controllers\Frontend\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index(Request $request){
        $this->validate($request, [
            'uname'     => 'required',
            'uemail'    => 'required|email',
            'unumber'   => 'required|numeric',
            'udate'      => 'required'
        ]);

        $appointment = new Appointment;
        $appointment->uname     = $request->input('uname');
        $appointment->uemail    = $request->input('uemail');
        $appointment->unumber   = $request->input('unumber');
        $appointment->umsg      = $request->input('umsg');
        $appointment->udate      = $request->input('udate');
        if($appointment->save()){
            return redirect()->back()->with('message', 'Appointment Added Successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
