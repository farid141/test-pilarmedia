<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Task1Controller extends Controller
{
    public function __construct()
    {
        Session::put('menu', 'task1');
    }

    public function index()
    {
        return view('pages.task1');
    }
}
