<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc599f0c865d1185716aad3ce8dff51bf
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc599f0c865d1185716aad3ce8dff51bf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc599f0c865d1185716aad3ce8dff51bf::$classMap;

        }, null, ClassLoader::class);
    }
}
