<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Redis;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next, $role)
    {
        $user = $request->user();

        if($user->role !== $role){
            return redirect()->route('login')->with('error', 'Your are not logged in');
        }
        return $next($request);
    }


}
