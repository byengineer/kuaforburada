<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class apiService
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
        if(DB::table("users")->where('api_token',Input::get('token'))->first()){
            return $next($request);
        }
        else{
            return Response::json( [
                'case' => "Token Hatasi"

        ], 200);
        }


       // return $next($request);
    }
}
