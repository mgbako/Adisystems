<?php

namespace App\Http\Middleware;

use Closure;

class IsNotAdmin
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
        if(! $request->user()->isNotAdmin())
        {
            return redirect('posts')
        }
        
        return $next($request);
    }
}
