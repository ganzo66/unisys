<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
    * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role->name === 'user') {
            Log::info('UserMiddleware дамжиж байна.');
            return $next($request);
        }
        Log::warning('UserMiddleware: Нэвтрээгүй эсвэл role тохирохгүй байна.');
        return redirect('/login')->with('error', 'Зөвшөөрөлгүй нэвтрэлт. Зөвхөн хэрэглэгчид нэвтрэнэ.');
    }
}
