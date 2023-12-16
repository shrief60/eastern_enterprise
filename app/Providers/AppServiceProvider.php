<?php

namespace App\Providers;

use App\Repositories\CompanyRepository;
use App\Repositories\CompanyRepositoryInterface;
use App\Services\Company\CompanyService;
use App\Services\Company\CompanyServiceInterface;
use App\Services\Nasdaq\NasdaqService;
use App\Services\Nasdaq\NasdaqServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CompanyServiceInterface::class, CompanyService::class);
        $this->app->bind(CompanyRepositoryInterface::class, CompanyRepository::class);
        $this->app->bind(NasdaqServiceInterface::class, NasdaqService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
