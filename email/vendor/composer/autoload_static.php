<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47e3ab4578a2a412e98ccc879e6ffd2b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47e3ab4578a2a412e98ccc879e6ffd2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47e3ab4578a2a412e98ccc879e6ffd2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47e3ab4578a2a412e98ccc879e6ffd2b::$classMap;

        }, null, ClassLoader::class);
    }
}
