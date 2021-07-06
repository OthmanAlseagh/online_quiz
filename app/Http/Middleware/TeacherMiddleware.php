<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class TeacherMiddleware
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
        if(Sentinel::check()&& Sentinel::getUser()->roles()->first()->slug=='teacher')
        return $next($request);

    else
        return redirect('/home');
    }
}
