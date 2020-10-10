<?php

namespace App\Http\Controllers\Frontend\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
class BlogsController extends Controller
{
    public function showPost($slug, $id){
        $single_post = Blog::find($id);
        return view('web.blog-details', compact('single_post'));
    }

    public function blog() {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(15);
        return view('web.blog', compact('blogs'));
    }
}
