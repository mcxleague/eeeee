<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited9577a12ce2307162bc0a1e8b892ad3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited9577a12ce2307162bc0a1e8b892ad3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited9577a12ce2307162bc0a1e8b892ad3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited9577a12ce2307162bc0a1e8b892ad3::$classMap;

        }, null, ClassLoader::class);
    }
}
