<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('regular', function (User $user) {
            return $user->accesslevel === 1;
        });

        Gate::define('supervisor', function (User $user) {
            return $user->accesslevel === 2;
        });

        Gate::define('admin', function (User $user) {
            return $user->accesslevel === 3;
        });

        Gate::define('adminORsupervisor', function (User $user) {
            if (
                $user->accesslevel === 2 || $user->accesslevel === 3
            ) {
                return true;
            }
            return false;
        });
    }
}
