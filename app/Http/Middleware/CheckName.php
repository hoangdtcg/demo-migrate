<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Xử lý logic middleware
//        dd($request);
        $name = $request->name;
        if(preg_match('/[0-9]/', $name)){
            dd("Tên không được chứa số");
        }
        return $next($request);
    }
}
