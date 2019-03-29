<?php

namespace App\Http\Middleware;

use Closure;

class HasOrder
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
        if(!empty(auth()->user()->orders)) {
            return $next($request);
        } else {
            return redirect('/liste-produits')->with('status','Vous n\'avez pas encore passé de commande chez nous');
        }
    }
}
