<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf40277382abb6124e1333f1fb3dfc9cf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Freelas\\Model\\' => 14,
            'Freelas\\Lib\\' => 12,
            'Freelas\\Controller\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Freelas\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Freelas\\Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
        'Freelas\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf40277382abb6124e1333f1fb3dfc9cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf40277382abb6124e1333f1fb3dfc9cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf40277382abb6124e1333f1fb3dfc9cf::$classMap;

        }, null, ClassLoader::class);
    }
}
