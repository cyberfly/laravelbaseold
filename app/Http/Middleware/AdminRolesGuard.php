<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Entrust;

class AdminRolesGuard
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

        if ($route_name=='admin.roles.index') {

            if (!Entrust::can('manage_roles')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }

        }

        if ($route_name=='admin.roles.create' || $route_name=='admin.roles.store') {

            if (!Entrust::can('create_role')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.roles.edit' || $route_name=='admin.roles.update') {

            if (!Entrust::can('edit_role')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.roles.destroy') {

            if (!Entrust::can('delete_role')) {

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
