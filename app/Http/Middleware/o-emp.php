<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class emp
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
        if (auth()->user()->role=='emp') {
            return $next($request);
        }else{
            return redirect()->route(auth()->user()->role)->with('error','access ');
        }
    }
    }

