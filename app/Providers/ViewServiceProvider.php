<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // is role directive
        Blade::directive('role', function(string $role) {
            return "<?php if(Auth::user()->role->value == $role): ?>";
        });

        Blade::directive('endrole', function() {
            return "<?php endif; ?>";
        });
    }
}
