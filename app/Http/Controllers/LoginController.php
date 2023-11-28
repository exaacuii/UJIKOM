<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('home');
    }
}
