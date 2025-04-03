<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }


    public function prices()
    {
        return view('prices');
    }

    public function blog()
    {
        return view('blog');
    }


    public function contact()
    {
        return view('contact');
    }
  


}
