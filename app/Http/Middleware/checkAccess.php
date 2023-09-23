<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, String ...$str): Response
    {
        // $roles = substr($str,0,12)->explode(',:', $str);
        $roles = $str;
        $my_role = "";
        if(session('id_user')){
            if(!session('isInspektur')){
                $my_role = "user";
                if(!in_array($my_role,$roles)){
                    return redirect()->route('home');
                }
            }
            else{
                $my_role = "inspektur";
                if (!in_array($my_role, $roles)) {
                    return redirect()->route('home');
                }
            }
        }
        else{
            $my_role = "guest";
            if(!in_array($my_role,$roles)){
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
