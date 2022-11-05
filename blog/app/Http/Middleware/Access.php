<?php

namespace App\Http\Middleware;

use Closure;

class Access
{
    public function handle($request, Closure $next, $role)
    {

        switch($role)
        {
            case 'admin':
            if(!\Auth::user())
            {
                if($request->ajax())
                    return response('Access Denied')->setStatusCode(403);
                abort(404);
            }
            else
            if(!$request->user()->is_admin)
            {
                if($request->ajax())
                return response('Access Denied')->setStatusCode(403);
                abort(404);
            }
            break;
            default:
            return response('Access Denied')->setStatusCode(403);
            break;
        }

        return $next($request);
    }
}
