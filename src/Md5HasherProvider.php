<?php

namespace Jarvis\Md5;

use Illuminate\Support\ServiceProvider;

class Md5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('jarvis-md5',function (){
            return new Md5Hasher();
        });
    }
}
