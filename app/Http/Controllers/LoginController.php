<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('layouts.page.login.index', [
            'tittle' => 'Login',
            'active' => 'login',
        ]);
    }
}
