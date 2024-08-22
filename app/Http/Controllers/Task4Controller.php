<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Task4Controller extends Controller
{
    public function __construct()
    {
        Session::put('menu', 'task4');
    }


    public function index()
    {
        return view('pages.task4');
    }
}
