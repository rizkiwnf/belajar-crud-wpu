<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index(){
        return view('layouts.page.register.index', [
            'tittle' => 'Register',
            'active' => 'register',
        ]);
    }
    public function store(Request $request){
        // return $request->all();
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255'],
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($request);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registrasion was successful! Please Login');
        return redirect('/login')->with('success', 'Registrasion was successful! Please Login');
    }
}
