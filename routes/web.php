<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/regis', [AuthController::class, 'tampilRegistrasi'])->name('registrasi');

Route::post('/regis/sub', [AuthController::class, 'submitRegistrasi'])->name('submit.registrasi');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');

Route::post('/login/sub', [AuthController::class, 'submitLogin'])->name('submit.login');

Route::post('/home', [HomeController::class, 'tampilHome'])->name('home.tampil');



route::get('/home',function(){
    return view('home');
});
Route::get('/', function () {
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

Route::get('/info3', function () {
    return view('info3');
});
Route::get('/eticket1', function () {
    return view('eticket1');
});
Route::get('/myticket', function () {
    return view('myticket');
});
Route::get('/eticket2', function () {
    return view('eticket2');
});
Route::get('/pilihtempat1', function () {
    return view('pilihtempat1');
});
Route::get('/pilihtempat2', function () {
    return view('pilihtempat2');
});
Route::get('/shoppingbasket', function () {
    return view('shoppingbasket');
});
Route::get('/promotorawal', function () {
    return view('promotorawal');
});
    Route::get('/seating', function () {
       return view('seating');
   });
    Route::get('/dashboard', function () {
       return view('dashboard');
   });
