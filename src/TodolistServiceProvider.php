<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    //    $this->loadViewsFrom(__DIR__.'/views', '/calculator');
       // $this->publishes([
      //      __DIR__.'/views' => base_path('resources/views/Devdojo/Calculator'),
      //  ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Devdojo\Calculator\TaskController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }
}
