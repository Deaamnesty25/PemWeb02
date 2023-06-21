<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //memanggil form register 
    function index()
    {
        return view('pages.auth.register');
    }

    //memperoses registrasi user
    function register (Request $request)
    {

    }
}
