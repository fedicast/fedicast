<?php

namespace App\Providers;

use View;
use App\Blog\Collector;
use App\Blog\LatestItemComposer;
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
        $this->app->bind(Collector::class, function () {
            return new Collector(resource_path('blog'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('_partials.new-blog-post-badge', LatestItemComposer::class);
    }
}
