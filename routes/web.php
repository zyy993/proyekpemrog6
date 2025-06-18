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
Route::get('/home', [HomeController::class, 'tampilHome'])->middleware('auth')->name('home.tampil');


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
    return view('user.info1');
});


Route::get('/info2', function () {
    return view('user.info2');
});

Route::get('/info3', function () {
    return view('user.info3');
});
Route::get('/info4', function () {
    return view('promotor.info4');
});
Route::get('/eticket', function () {
    return view('user.eticket');
});

Route::get('/myticket', function () {
    return view('user.myticket');
});

Route::get('/pilihtempat', function () {
    return view('user.pilihtempat');
});

Route::get('/shoppingbasket', function () {
    return view('user.shoppingbasket');
});

Route::get('/promotorawal', function () {
    return view('promotor.promotorawal');
});
Route::get('/promotorawal1', function () {
    return view('promotorawal1');
});

Route::get('/mysales', function () {
    return view('promotor.mysales');
});
Route::get('/mysales1', function () {
    return view('promotor.mysales1');
});
Route::get('/mysales2', function () {
    return view('promotor.mysales2');
});
Route::get('/mysales3', function () {
    return view('promotor.mysales3');
});
Route::get('/mysales4', function () {
    return view('promotor.mysales4');
});
Route::get('/mysales5', function () {
    return view('promotor.mysales5');
});
Route::get('/arsipevent', function () {
    return view('promotor.arsipevent');
});

Route::get('/riwayattransaksi', function () {
    return view('promotor.riwayattransaksi');
});

Route::get('/riwayattransaksi1', function () {
    return view('user.riwayattransaksi1');
});

Route::get('/faq', function () {
    return view('promotor.faq');
});
Route::get('/faq1', function () {
    return view('user.faq1');
});
Route::get('/faq2', function () {
    return view('admin.faq2');
});
Route::get('/review', function () {
    return view('promotor.review');
});
Route::get('/review1', function () {
    return view('user.review1');
});
Route::get('/review3', function () {
    return view('admin.review3');
});
Route::get('/notif', function () {
    return view('promotor.notif');
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
Route::get('/notif4', function () {
    return view('admin.notif4');
});
Route::get('/livechat', function () {
    return view('user.livechat');
});

Route::get('/editprofile', function () {
    return view('user.editprofile');
});
Route::get('/contoh', function () {
    return view('contoh');
});
Route::get('livechat1', function () {
    return view('promotor.livechat1');
});
Route::get('livechat2', function () {
    return view('admin.livechat2');
});
Route::get('editprofile1', function () {
    return view('promotor.editprofile1');
});
Route::get('editprofile3', function () {
    return view('promotor.editprofile3');
});
Route::get('/seating', function () {
    return view('seating');
});
Route::get('/tambahticket', function () {
    return view('tambahticket');
});
Route::get('/validasikonser', function () {
    return view('validasikonser');
});
Route::get('/validasikonser1', function () {
    return view('validasikonser1');
});
// Route untuk menampilkan halaman dashboard
//Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.index');

// Dashboard CRUD routes (menggunakan HomeController)
Route::resource('dashboard', HomeController::class);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['auth', 'role:promotor'])->group(function () {
    Route::get('/promotor/dashboard', function () {
        return view('promotor.dashboard');
    });
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    });
});

