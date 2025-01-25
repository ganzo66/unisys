<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

// class CheckUserRole
// {
//     public function handle(Request $request, Closure $next): Response
//     {
//         if (Auth::check()) {
//             $role = Auth::user()->role->name;

//             if ($role === 'admin') {
//                 // Админы хандалтыг зөвшөөрөх
//                 return $next($request);
//             } elseif ($role === 'user') {
//                 // Хэрэглэгчийн хандалтыг зөвшөөрөх
//                 return $next($request);
//             }
//         }

//         // Нэвтрэхгүй бол redirect хийх
//         return redirect('/login')->with('error', 'Unauthorized access.');
//     }
// }

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
    * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //  public function handle(Request $request, Closure $next):Response
    //  {
    //      if (Auth::check() && Auth::user()->role ->role_id === '1') {
    //          return $next($request);
    //      }

    //      return redirect('/login')->with('error', 'Unauthorized access.');
    //  }

    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::check() || !Auth::user()->isAdmin()) {
    //         return redirect('/login'); // Ensure this is not causing a loop
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->name === 'admin') {
            return $next($request);
        }

        return redirect('/login')->with('error', 'Зөвшөөрөлгүй нэвтрэлт. Зөвхөн админууд нэвтрэнэ.');
    }







    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(Auth::check() && Auth::user() -> isAdmin())
    //     {
    //         return $next($request);
    //     }
    //     else{
    //         return redirect('/')->with('status','Access Denied! You are not ADMIN');
    //     }
    // }
}
