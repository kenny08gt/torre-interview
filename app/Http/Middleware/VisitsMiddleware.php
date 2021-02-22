<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VisitsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $visitor = request()->ip();
        $time = now();

        file_put_contents(public_path('/visits.txt'), $visitor.'-'.$time->format('F j, Y, g:i a'). PHP_EOL, FILE_APPEND);
        return $next($request);
    }
}
