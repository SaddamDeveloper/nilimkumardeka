<?php

namespace App\Http\Controllers\Frontend\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Validator;

class AppointmentController extends Controller
{
    public function index(Request $request){
        $rules = array(
            'uname'         => 'required',
            'uemail'        => 'required|email:rfc,dns',
            'unumber'       => 'required|numeric',
            'udate'         => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $email = $request->input('uemail');
        $isExists = Appointment::where('uemail',$email)->first();
        if($isExists){
            return response()->json(array("error" => "Email already exists!"));
        }

        $mobile = $request->input('unumber');
        $isExists = Appointment::where('unumber',$mobile)->first();
        if($isExists){
            return response()->json(array("error" => "Mobile already exists!"));
        }
        $appointment = new Appointment;
        $appointment->uname     = $request->input('uname');
        $appointment->uemail    = $request->input('uemail');
        $appointment->unumber   = $request->input('unumber');
        $appointment->umsg      = $request->input('umsg');
        $appointment->udate      = $request->input('udate');
        if($appointment->save()){
            return response()->json(['success' => 'Data Added successfully.']);
        }
    }
}
