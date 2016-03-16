<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Entrust;

class AdminUsersGuard
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
        $route_name = Route::currentRouteName();

        if ($route_name=='admin.users.index') {

            if (!Entrust::can('manage_users')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }

        }

        if ($route_name=='admin.users.create' || $route_name=='admin.users.store') {

            if (!Entrust::can('create_user')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.users.edit' || $route_name=='admin.users.update') {

            if (!Entrust::can('edit_user')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.users.destroy') {

            if (!Entrust::can('delete_user')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        return $next($request);
    }
}
