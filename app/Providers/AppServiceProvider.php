<?php

namespace App\Providers;

use App\Models\categories;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
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
        View::share("categories", categories::all());
        // View::share('cart', session()->get('cart', []));
        // Log::info(session()->get('cart'));
    }
}
