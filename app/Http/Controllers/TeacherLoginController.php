<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.teacher-login');
    }

    public function login(Request $request)
{
    $request->validate([
        'teacher_email' => 'required|email',
        'teacher_email_password' => 'required|string',
    ]);

    // Use the teacher_email and teacher_email_password for credentials
    $credentials = [
        'teacher_email' => $request->teacher_email,
        'password' => $request->teacher_email_password, // Map to Laravel's default 'password' key
    ];

    // Attempt login
    if (Auth::guard('teacher')->attempt($credentials)) {
        return redirect()->route('teacher.layouts.index');
    }

    return back()->withErrors(['teacher_email' => 'Invalid credentials.']);
}

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('/teacher/login');
    }
}
