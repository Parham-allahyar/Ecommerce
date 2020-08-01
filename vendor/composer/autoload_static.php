<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf66a0e65c1bf11d71c810273d73d7bb
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Ghasedak\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ghasedak\\' => 
        array (
            0 => __DIR__ . '/..' . '/ghasedak/php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf66a0e65c1bf11d71c810273d73d7bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf66a0e65c1bf11d71c810273d73d7bb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
