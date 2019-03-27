<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->guest()) {
            return redirect('/')->with('status','Vous n\'avez pas accès au Dashboard.');
        }
        else if(auth()->user()->is_admin === 1) {
            return $next($request);
        }

        return redirect('/')->with('status','Vous n\'avez pas accès au Dashboard.');
    }
}
