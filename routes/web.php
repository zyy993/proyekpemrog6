<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/regis', [AuthController::class, 'tampilRegistrasi'])->name('registrasi');
Route::post('/regis/sub', [AuthController::class, 'submitRegistrasi'])->name('submit.registrasi');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/sub', [AuthController::class, 'submitLogin'])->name('submit.login');

// Route untuk menampilkan halaman beranda (dengan card event)
Route::get('/home', [AuthController::class, 'tampilHome'])->name('home.tampil');
Route::get('/home', [HomeController::class, 'tampilHome'])->name('home.tampil');

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

Route::get('/eticket', function () {
    return view('eticket');
});

Route::get('/myticket', function () {
    return view('myticket');
});

Route::get('/pilihtempat', function () {
    return view('pilihtempat');
});

Route::get('/shoppingbasket', function () {
    return view('shoppingbasket');
});

Route::get('/promotorawal', function () {
    return view('promotorawal');
});

Route::get('/mysales', function () {
    return view('mysales');
});

Route::get('/arsipevent', function () {
    return view('arsipevent');
});

Route::get('/riwayattransaksi', function () {
    return view('riwayattransaksi');
});

Route::get('/riwayattransaksi1', function () {
    return view('riwayattransaksi1');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/faq1', function () {
    return view('faq1');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/review1', function () {
    return view('review1');
});
Route::get('/notif1', function () {
    return view('notif1');
});

Route::get('/notif2', function () {
    return view('notif2');
});

Route::get('/notif3', function () {
    return view('notif3');
});

Route::get('/livechat', function () {
    return view('livechat');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/seating', function () {
    return view('seating');
});

// Route untuk menampilkan halaman dashboard
//Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.index');

// Dashboard CRUD routes (menggunakan HomeController)
Route::resource('dashboard', HomeController::class);
