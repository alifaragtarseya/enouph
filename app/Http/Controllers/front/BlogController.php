<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('front.blogs.index');
    }

    public function show(){
        if (request()->type == 'one') {
            return view('front.blogs.view_blog_1');
        }
        elseif(request()->type == 'two')
        {
            return view('front.blogs.view_blog_2');
        }else{
            return view('front.blogs.view_blog_3');
        }


    }
}
