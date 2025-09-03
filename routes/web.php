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
})->name('home');


use App\Http\Controllers\projectsController;
Route::get('/projects', [projectsController::class, 'index'])->name('projects');
Route::get('/detail/{id}', [projectsController::class, 'detail'])->name('detail');

use App\Http\Controllers\AuthController;
use App\Http\Controllers\adminController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [adminController::class, 'index'])->name('projects.index');
    Route::post('/admin/store', [adminController::class, 'store'])->name('projects.store');
    Route::put('/admin/update/{id}', [adminController::class, 'update'])->name('projects.update');
    Route::delete('/admin/delete/{id}', [adminController::class, 'destroy'])->name('projects.destroy');

});


