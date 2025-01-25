<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole

{

    /**

     * Handle an incoming request.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \Closure  $next

     * @param  string  $role

     * @return mixed

     */

    public function handle(Request $request, Closure $next, $role)

    {

        if (!$request->user() || !$request->user()->hasRole($role)) {

            // Redirect or abort if the user does not have the required role

            return redirect('/home');

        }



        return $next($request);

    }

}
