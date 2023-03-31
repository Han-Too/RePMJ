<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status','Anda Bukan Admin');
            }
        }
        else
        {
            return redirect('/')->with('status','Login Dulu Masbro');
        }
        // if (auth()->check() && auth()->user()->role == 'admin') {
        //     return $next($request);
        // }
        // Alert::error('error', 'lu sapa masbro');
        // return redirect('/');
    }
}