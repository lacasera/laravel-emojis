<?php

namespace Lacasera\Emojis;

use Illuminate\Support\ServiceProvider;

class LaravelEmojisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Emoticons::class, function ($app){
           return new  Emoticons();
        });
    }
}
