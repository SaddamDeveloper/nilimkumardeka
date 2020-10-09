<?php

namespace App\Http\Controllers\Admin\Appointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index(){
        return view('admin.appointment.index');
    }

    public function view(){
        $query = Appointment::orderBy('created_at', 'DESC');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('action', function($row){
            $btn = '
                <a href="'.route('admin.appointment_delete', [encrypt($row->id)]).'" class="btn btn-danger btn-sm">Delete</a>              
            ';
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function destroy($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $appointment = Appointment::find($id);
        if($appointment->delete()){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
