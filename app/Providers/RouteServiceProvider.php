<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     *
     */
    public const HOME = '/dashboard';
    // protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['admin'])
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
        });
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
        RateLimiter::for('checkRequest', function (Request $request) {
            $keyTest = 'checkRequest' . $request->ip();
            $max = 5;
            $delay = 60;
            if (RateLimiter::tooManyAttempts($keyTest, $max)) {
                return new Limit('', 0);
            } else {
                RateLimiter::hit($keyTest, $delay);
            }
        });
    }
}
