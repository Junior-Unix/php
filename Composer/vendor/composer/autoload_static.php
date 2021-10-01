<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b110e6f3e2b43f7225cfd4957dd8641
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonju\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonju\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b110e6f3e2b43f7225cfd4957dd8641::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b110e6f3e2b43f7225cfd4957dd8641::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b110e6f3e2b43f7225cfd4957dd8641::$classMap;

        }, null, ClassLoader::class);
    }
}
