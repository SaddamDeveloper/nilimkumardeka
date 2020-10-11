<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $total_blog = Blog::count();
        $total_appointment = Appointment::count();

        return view('admin.dashboard', compact('total_blog', 'total_appointment'));
    }
}
