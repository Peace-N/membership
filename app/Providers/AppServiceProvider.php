<?php

namespace App\Providers;

use App\Models\PageCategory;
use App\Services\PaymentProviders\LemonSqueezy\LemonSqueezyProvider;
use App\Services\PaymentProviders\Paddle\PaddleProvider;
use App\Services\PaymentProviders\PaymentManager;
use App\Services\PaymentProviders\Stripe\StripeProvider;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->app->tag([
            StripeProvider::class,
            PaddleProvider::class,
            LemonSqueezyProvider::class,
        ], 'payment-providers');

        $this->app->bind(PaymentManager::class, function () {
            return new PaymentManager(...$this->app->tagged('payment-providers'));
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            Js::make('components-script', __DIR__.'/../../resources/js/components.js'),
        ]);

        Facades\View::composer('*', function (View $view) {
            $pageCategories = PageCategory::all();
            $view->with('aboutFooter', $pageCategories->where('slug', 'about')->load('pages')->firstOrFail());
            $view->with('supportFooter', $pageCategories->where('slug', 'support')->load('pages')->firstOrFail());
            $view->with('resourcesFooter', $pageCategories->where('slug', 'resources')->load('pages')->firstOrFail());
            $view->with('affiliatesFooter', $pageCategories->where('slug', 'affiliates')->load('pages')->firstOrFail());
        });
    }
}
