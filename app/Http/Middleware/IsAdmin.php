<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class IsAdmin
// {
//     public function handle(Request $request, Closure $next):Response
//     {
//         if (Auth::check() && Auth::user()->role ->name === 'admin') {
//             return $next($request);
//         }

//         return redirect('/login')->with('error', 'Unauthorized access.');
//     }
// }
// class IsUser
// {
//     public function handle($request, Closure $next)
//     {
//         if (Auth::check() && Auth::user()->role === 'user') {
//             return $next($request);
//         }

//         return redirect('/login')->with('error', 'Unauthorized access.');
//     }
// }
