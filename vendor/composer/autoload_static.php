<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9868baf2a71a4d9fab7f4d3abf17c3fc
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9868baf2a71a4d9fab7f4d3abf17c3fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9868baf2a71a4d9fab7f4d3abf17c3fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9868baf2a71a4d9fab7f4d3abf17c3fc::$classMap;

        }, null, ClassLoader::class);
    }
}
