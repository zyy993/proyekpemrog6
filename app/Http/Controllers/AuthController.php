<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
function tampilRegistrasi () {
return view('signup');
}

function submitRegistrasi (Request $request){

$user = new User();
$user->name = $request->name;
$user->email = $request->email;
$user->password = bcrypt($request->password);
$user->save();
return redirect()->route ('login.tampil');
}

function tampilLogin(){
    return view('signin');

}

function submitLogin (Request $request) {
    $data = $request->only('email', 'password');

if (Auth:: attempt ($data)) {
    $request->session()->regenerate();
return redirect()->route('home.tampil');
} else {
return redirect()->back()->with('gagal', 'Email atau password anda salah');
}

}

function tampilHome(){
    return view('home');

}

}
