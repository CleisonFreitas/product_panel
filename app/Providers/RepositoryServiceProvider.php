<?php

namespace App\Providers;

use App\Shared\Interfaces\CreateProductInterface;
use App\Shared\Repositories\CreateProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CreateProductInterface::class, CreateProductRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
