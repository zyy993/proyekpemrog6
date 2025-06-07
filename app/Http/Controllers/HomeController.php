<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{


    function tampilHome () {
        return view('home');
}

    function ubahbanner(){
        return view('ubahbanner');
    }
}
