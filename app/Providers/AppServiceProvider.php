<?php

namespace App\Providers;

use App\Cache\MemcacheService;
use App\Cache\MemcacheServiceInterface;
use App\Cache\RedisService;
use App\Cache\RedisServiceInterface;
use App\Handlers\LoggerHandler;
use App\Handlers\LoggerHandlerInterface;
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
        $this->app->bind(LoggerHandlerInterface::class, LoggerHandler::class);
        $this->app->bind(MemcacheServiceInterface::class, MemcacheService::class);
        $this->app->bind(RedisServiceInterface::class, RedisService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
