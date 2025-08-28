<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/project-hotel', function () {
    return view('projects/hotel');
});

Route::get('/simple-android', function () {
    return view('projects/simple-android');
});

Route::get('/pjb', function () {
    return view('projects/pjb');
});