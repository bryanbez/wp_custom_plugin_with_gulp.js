<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13ab0cb6e22c21634b9924ccf345bf78
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IncludeFile\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IncludeFile\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13ab0cb6e22c21634b9924ccf345bf78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13ab0cb6e22c21634b9924ccf345bf78::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
