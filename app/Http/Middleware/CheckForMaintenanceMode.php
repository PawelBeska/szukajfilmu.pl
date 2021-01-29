<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Original;
class CheckForMaintenanceMode extends Original
{

    protected $excludedRoutes = [];
    public function handle($request, Closure $next)
    {
        $i=0;
        if($i) {
            if ($request->ip()=="77.255.194.157") {
                return $next($request);
            } else {
                $response = $next($request);
                if (in_array($request->route()->uri(), $this->excludedRoutes)) {
                    return $response;
                }else{
                    return Response::make(view('home.maintenance'));
                }
            }
        }else{
            return $next($request);
        }
    }
}
