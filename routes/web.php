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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/verif', function () {
    return view('verif');
});
Route::get('/verifc', function () {
    return view('verifc');
});
Route::get('/info1', function () {
    return view('info1');
});
Route::get('/info2', function () {
    return view('info2');
});
Route::get('/eticket', function () {
    return view('eticket');
});
Route::get('/myticket', function () {
    return view('myticket');
});

