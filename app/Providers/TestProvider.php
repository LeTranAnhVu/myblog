<?php

namespace App\Providers;

use App\Interfaces\IMyService;
use App\Services\GoogleService;
use App\Services\MyService;
use Illuminate\Support\ServiceProvider;
class TestProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IMyService::class, MyService::class);
//        $this->app->bind(IMyService::class, GoogleService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
