<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Closure;

class Admin
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
        $user = Auth::user();
        if (!$user || !$user->isRole(User::ROLE_ADMIN)){
            return response('Forbidden', 403);
        }
        return $next($request);
    }
}
