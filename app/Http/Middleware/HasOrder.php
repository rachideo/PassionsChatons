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
        $user = auth()->user();

        if(!empty($user->orders)) {
            if($user->hasAddresses()) {
                return $next($request);
            } else {
                return redirect()->route('user_addresses', $user->id);
            }
        } else {
            return redirect()->route('product_list')->with('status','Vous n\'avez pas encore passé de commande chez nous');
        }
    }
}
