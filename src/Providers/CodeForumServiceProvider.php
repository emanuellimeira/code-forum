<?php

namespace CodeEdu\CodeForum\Providers;

use Illuminate\Support\ServiceProvider;

class CodeForumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__.'/../Routes/routes.php';
        }
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'codeforum');

        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations')
        ], 'migrations');
    }   

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
