<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.ULandingPage');
    }

    public function login(){
        return view('user.ULogin');
    }

    public function log(){
        return view('user.ULog');
    }

    public function editPass(){
        return view('user.UEditPass');
    }
}
