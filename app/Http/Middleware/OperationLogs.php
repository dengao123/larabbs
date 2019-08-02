<?php

namespace App\Http\Middleware;

use Closure;

class OperationLogs
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
        //dd($request->method());
        switch ($request->method()){
            case 'POST':
                dd('create');
                break;
            case 'PATCH':
                dd('update');
                break;
            case 'DELETE':
                dd('delete');
                break;
        }

        return $next($request);
    }
}
