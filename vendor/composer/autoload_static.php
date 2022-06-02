<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c6ee6d42257132dbc9feb98eb07fc08
{
    public static $files = array (
        'ca3a468b086a7962c18db2611e62957e' => __DIR__ . '/../..' . '/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pledg\\PledgPaymentGateway\\' => 26,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pledg\\PledgPaymentGateway\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c6ee6d42257132dbc9feb98eb07fc08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c6ee6d42257132dbc9feb98eb07fc08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c6ee6d42257132dbc9feb98eb07fc08::$classMap;

        }, null, ClassLoader::class);
    }
}
