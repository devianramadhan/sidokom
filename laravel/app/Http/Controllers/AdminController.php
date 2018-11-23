<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.landingAdmin');
    }


    public function member(){
        return view('admin.member');
    }
}
