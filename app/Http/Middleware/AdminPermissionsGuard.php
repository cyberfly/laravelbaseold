<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Entrust;

class AdminPermissionsGuard
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

        if ($route_name=='admin.permissions.index') {

            if (!Entrust::can('manage_permissions')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }

        }

        if ($route_name=='admin.permissions.create' || $route_name=='admin.permissions.store') {

            if (!Entrust::can('create_permission')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.permissions.edit' || $route_name=='admin.permissions.update') {

            if (!Entrust::can('edit_permission')) {

                if ($request->ajax() || $request->wantsJson()) {
                    return response('Unauthorized.', 401);
                } else {
                    abort(403, 'Access denied');
                }
            }
        }

        if ($route_name=='admin.permissions.destroy') {

            if (!Entrust::can('delete_permission')) {

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
