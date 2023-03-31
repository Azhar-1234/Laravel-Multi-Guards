<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if(! $request->expectsJson()){
        	if ($request->routeIs('admin.*')) {
        		route('admin.login');
        	}
            if ($request->routeIs('doctor.*')) {
                route('doctor.login');
            }
        	return route('user.login');
        }
    }
}
