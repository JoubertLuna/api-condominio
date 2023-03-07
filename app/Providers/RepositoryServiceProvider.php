<?php

namespace App\Providers;

use App\Repositories\{
  CompanyRepository,
  UserRepository
};

use App\Repositories\Contracts\{
  CompanyRepositoryInterface,
  UserRepositoryInterface
};

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    $this->app->bind(
      CompanyRepositoryInterface::class,
      CompanyRepository::class,
    );

    $this->app->bind(
      UserRepositoryInterface::class,
      UserRepository::class
    );
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {
    //
  }
}
