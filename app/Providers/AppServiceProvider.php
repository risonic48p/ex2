<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\ArticleServiceInterface;
use App\Services\ArticleService;
use App\Http\Controllers\ArticleController;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use App\Repositories\ArticleRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->when(ArticleController::class)
            ->needs(ArticleServiceInterface::class)->give(function($app) {
                return $app->make(ArticleService::class);
            });

        $this->app->when(ArticleService::class)
            ->needs(ArticleRepositoryInterface::class)->give(function($app) {
                return $app->make(ArticleRepository::class);
            });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
