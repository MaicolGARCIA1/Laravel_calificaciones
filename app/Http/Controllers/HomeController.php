<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function central()
    {
        return view('central');
    }

    public function norte()
    {
        return view('norte');
    }

    public function campus()
    {
        return view('campus');
    }
}
