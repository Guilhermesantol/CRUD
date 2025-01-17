<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a67aaef16f4c268f69d7486173e151f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a67aaef16f4c268f69d7486173e151f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a67aaef16f4c268f69d7486173e151f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a67aaef16f4c268f69d7486173e151f::$classMap;

        }, null, ClassLoader::class);
    }
}
