<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('loginPage');
    }
    
    public function adminDashboard(){
        return view('posAdminDashboard/dashboard');
    }
}
