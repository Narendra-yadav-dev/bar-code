<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashbaord');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
