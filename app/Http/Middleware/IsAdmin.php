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
        if(is_null($request->route('admin'))){
            return redirect('prueba/restfull');
            return redirect()->action('restController@index')->withInput();

        }
        return $next($request);
    }
}
