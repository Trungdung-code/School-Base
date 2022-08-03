<?php

namespace App\Http\Middleware;

use App\Http\Requests\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user || !$user->isRole(User::ROLE_ADMIN)){
            return response('Forbidden', 403);
        }
        return $next($request);
    }
}
