<?php

use App\Http\Controllers\Task1Controller;
use App\Http\Controllers\Task2Controller;
use App\Http\Controllers\Task3Controller;
use App\Http\Controllers\Task4Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/task1', [Task1Controller::class, 'index']);
Route::get('/task2', [Task2Controller::class, 'index']);
Route::get('/task3', [Task3Controller::class, 'index']);
Route::get('/task4', [Task4Controller::class, 'index']);
