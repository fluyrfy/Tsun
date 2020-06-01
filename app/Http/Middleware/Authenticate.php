<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Session;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request, $guard = null)
    {
        if(Auth::guard($guard)->guest()){
            if ($request->ajax() || $request->wantsJson()) {
            return response('未經認證.',401);
            }else{
                Session::put('oldUrl', $request->url());
                return '/users/signin';
            }
        }

    }
}
