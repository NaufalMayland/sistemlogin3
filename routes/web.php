<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerGuru;
use App\Http\Controllers\ControllerSiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ControllerLogin::class, "LoginForm"])->name('login');
Route::post('/', [ControllerLogin::class, "login"]);

Route::get('/admin',[ControllerAdmin::class, "index"]);

Route::get('/guru',[ControllerGuru::class, "index"]);

Route::get('/siswa',[ControllerSiswa::class, "index"])->name('siswa.index');
