<?php
namespace Authorization\Facades;

use Illuminate\Support\Facades\Facade;

class storeCodeFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Authorization.storeCodeFacade';
    }

    public static function ShouldProxyTo($class)
    {
        app()->singleton(self::getFacadeAccessor(), $class);
    }

}
