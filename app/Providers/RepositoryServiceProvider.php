<?php

namespace App\Providers;

use App\Http\Repository\Productinterface;
use App\Http\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Productinterface::class,ProductRepository::class);

    }

    /**:
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
