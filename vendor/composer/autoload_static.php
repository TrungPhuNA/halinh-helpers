<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32e424dc2d69185f79eba9057cf09178
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Halinh\\Helpers\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Halinh\\Helpers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit32e424dc2d69185f79eba9057cf09178::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32e424dc2d69185f79eba9057cf09178::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32e424dc2d69185f79eba9057cf09178::$classMap;

        }, null, ClassLoader::class);
    }
}