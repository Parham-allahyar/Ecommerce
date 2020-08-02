<?php

namespace Authorization\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Authorization\Facades\userProviderFacade;
use Authorization\Facades\storeCodeFacade;
use Authorization\Repositories\UserRepository;
use Authorization\PhpClass\storeCode;
class AuthorizationServiceProvider extends ServiceProvider
{

    public function register()
    {
        userProviderFacade::ShouldProxyTo(UserRepository::class);
        storeCodeFacade::ShouldProxyTo(storeCode::class);
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
