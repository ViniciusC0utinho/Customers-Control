<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->configureModels();
    }

    private function configureModels(): void
    {
        Model::unguard();
        Model::shouldBeStrict(! app()->isProduction());
    }
}
