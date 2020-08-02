<?php
namespace Authorization\Facades;

use Illuminate\Support\Facades\Facade;

class userProviderFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Authorization.userProviderFacade';
    }

    public static function ShouldProxyTo($class)
    {

        app()->singleton(self::getFacadeAccessor(), $class);
    }

}
