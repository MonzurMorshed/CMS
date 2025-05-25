<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interface\OurTeamRepositoryInterface;
use App\Repositories\Interface\CommonRepositoryInterface;
use App\Repositories\CommonRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
            $this->app->bind(CommonRepositoryInterface::class, CommonRepository::class);
             $this->app->bind(OurTeamRepositoryInterface::class, OurTeamRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
