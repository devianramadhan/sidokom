<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.ALandingPage');
    }


    public function member(){
        return view('admin.AMember');
    }

    public function editPass(){
        return view('admin.AEditPass');
    }

    public function log(){
        return view('admin.ALog');
    }

    public function login(){
        return view('admin.ALogin');
    }
}
