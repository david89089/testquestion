<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $blogs_count = Blog::all()->count();

        return view('admin.home.index',[
                'blogs_count' => $blogs_count
        ]);
    }
}
