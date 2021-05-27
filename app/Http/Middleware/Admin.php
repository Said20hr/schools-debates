<?php

namespace App\Http\Middleware;

use Closure;

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


        $roles = explode(',', $request->user()->role);
        if ( ! in_array('admin', $roles) ) {
            return abort( 404 );
        }
        return $next($request);
    }
}
