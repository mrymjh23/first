<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        config()->set('auth.providers.users.model', 'User');
    }
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/userRoutes.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'User');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}

