<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //memanggil from controller
    function index()
    {
        return view('pages.auth.login');
    }

    //memperoses login 
    function login(Request $request)
    {

    }
}
