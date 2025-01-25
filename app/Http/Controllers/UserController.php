<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        
        return view('user.layouts.index');
    }

    public function logout()
{
    Auth::logout();
    return redirect('/');
}
}
