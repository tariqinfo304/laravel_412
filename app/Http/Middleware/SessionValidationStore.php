<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionValidationStore
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
        /*
        $list = ["123","2323","web","tets","2334"];
        foreach($list as $row)
        {
            if(str_contains($request->url(),$row))
            {
                if(empty(session("user")))
                {
                    return redirect("/store/user/login");
                }               
            }
        }

        return $next($request);
        */

       //    dd(session("user"));
        if(str_contains($request->url(),"store/product"))
        {

            if(empty(session("user")))
            {
                return redirect("/store/user/login");
            }
        }
        return $next($request);
    }
}
