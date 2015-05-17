<?php namespace EricMakesStuff\DisplayName; 

use Illuminate\Support\ServiceProvider;

class DisplayNameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('displayName', function()
        {
            return new \EricMakesStuff\DisplayName\DisplayName;
        });
    }
}
