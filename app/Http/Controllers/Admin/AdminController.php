<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginPage(){
        return view('backend.login');
    }//End methid

    public function index(){
        return view('backend.admin.dashboard');
    }
}
