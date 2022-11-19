<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita087ed61db48225731e07ff4b1f28ec5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita087ed61db48225731e07ff4b1f28ec5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita087ed61db48225731e07ff4b1f28ec5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita087ed61db48225731e07ff4b1f28ec5::$classMap;

        }, null, ClassLoader::class);
    }
}
