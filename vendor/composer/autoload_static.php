<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteebba00d6c9f002b041d508a94e366fa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Model',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controller',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteebba00d6c9f002b041d508a94e366fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteebba00d6c9f002b041d508a94e366fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteebba00d6c9f002b041d508a94e366fa::$classMap;

        }, null, ClassLoader::class);
    }
}
