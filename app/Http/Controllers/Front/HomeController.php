<?php

namespace App\Http\Controllers\Front;

class HomeController
{
    public function index()
    {
         return redirect('/admin/front');
       // dd("test");
        // return view('front.home');
       // return view('home');
    }
}
