<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit088a617a32f814a9ba4ba7aaba56066e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit088a617a32f814a9ba4ba7aaba56066e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit088a617a32f814a9ba4ba7aaba56066e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
