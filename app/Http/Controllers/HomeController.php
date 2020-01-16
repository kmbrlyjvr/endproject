<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function help()
    {
        return view('help');

    }

    public function notfound()
    {
        return view('404');
    }
}
