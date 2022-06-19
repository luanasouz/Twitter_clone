<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3363551a33456f728d6ea777cf3c806a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3363551a33456f728d6ea777cf3c806a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3363551a33456f728d6ea777cf3c806a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3363551a33456f728d6ea777cf3c806a::$classMap;

        }, null, ClassLoader::class);
    }
}
