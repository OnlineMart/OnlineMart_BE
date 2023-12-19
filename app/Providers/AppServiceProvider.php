<?php

namespace App\Providers;

use App\Models\Product;
use \Probots\Pinecone\Client as Pinecone;
use App\Models\Shop;
use App\Observers\ProductObserver;
use App\Observers\ShopStatusObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if($this->app->environment() === 'local'){
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->app->bind(Pinecone::class, fn () => new Pinecone(
            config('services.pinecone.api_key'),
            config('services.pinecone.environment')
        ));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Shop::observe(ShopStatusObserver::class);
    }
}
