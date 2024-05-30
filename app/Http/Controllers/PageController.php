<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showInfoA()
    {
        return view('info-a');
    }

    public function showInfoB()
    {
        return view('info-b');
    }

    public function showInfoC()
    {
        return view('info-c');
    }
}
