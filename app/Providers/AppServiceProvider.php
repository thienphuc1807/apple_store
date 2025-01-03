<?php

namespace App\Providers;

use App\Models\categories;
use App\Models\subcategories;
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
        View::share("subCategories", subcategories::all());
        // View::share("cart", session()->get("cart", []));
    }
}
