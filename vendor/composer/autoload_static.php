<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5018e64cd684c5f8d3f3792e135d3150
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webkompanen\\Nstreinplanner\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webkompanen\\Nstreinplanner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5018e64cd684c5f8d3f3792e135d3150::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5018e64cd684c5f8d3f3792e135d3150::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5018e64cd684c5f8d3f3792e135d3150::$classMap;

        }, null, ClassLoader::class);
    }
}
