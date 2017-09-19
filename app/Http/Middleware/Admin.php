<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Admin
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
        if(Auth::check())
        {   
            
           // var_dump(Auth::user()->role); die;
            if(Auth::user()->isAdmin() == true)
            {  
                return $next($request);
            }

        }

        return redirect('/');
    }
}
