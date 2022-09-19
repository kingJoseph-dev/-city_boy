<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9264159d6cadb7c7cc9e7bd7ab64782e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9264159d6cadb7c7cc9e7bd7ab64782e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9264159d6cadb7c7cc9e7bd7ab64782e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9264159d6cadb7c7cc9e7bd7ab64782e::$classMap;

        }, null, ClassLoader::class);
    }
}