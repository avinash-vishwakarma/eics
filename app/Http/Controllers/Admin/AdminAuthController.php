<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function show(){
        return view("auth.admin.show");
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');


        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard(){
        return view("admin.dashboard");
    }

}
