<?php

namespace Authorization\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Authorization\Facades\userProviderFacade;
use Authorization\Repositories\UserRepository;
class AuthorizationServiceProvider extends ServiceProvider
{

    public function register()
    {
        userProviderFacade::ShouldProxyTo(UserRepository::class);
    }


    public function boot()
    {
        $this->defineRoutes();
    }

    private function defineRoutes()
    {
        Route::middleware('api')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../routes.php');
    }
}
