<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home.index');
    } 

    public function inner ()
    {
        return view('home.inner');
    } 

    public function portfolio ()
    {
        return view('home.portfolio');
    }
}
