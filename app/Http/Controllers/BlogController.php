<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.view', [
            'blogs'=> $blogs
        ]);
    }

    public function show(Blog $blog){
        return view('blog.show', [
            'blog'=> $blog
        ]);
    }
}
