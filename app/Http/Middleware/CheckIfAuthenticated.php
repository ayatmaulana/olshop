<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAuthenticated
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
        if(!\Session::has('credential'))
            return redirect("/home");
            
        return $next($request);
    }
}
