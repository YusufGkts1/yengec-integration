<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\IntegrationRepository;
use App\Interfaces\IntegrationRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IntegrationRepositoryInterface::class, IntegrationRepository::class);

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
