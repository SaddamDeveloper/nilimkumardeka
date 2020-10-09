<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function index() {
        $blogs = Blog::orderBy('id', 'DESC')->limit(3)->get();
        return view('web.index', compact('blogs'));
    }
    
}
