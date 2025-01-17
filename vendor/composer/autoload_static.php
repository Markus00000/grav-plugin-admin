<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6a520eb662703b9aa0b94d2e30cc77f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
        'L' => 
        array (
            'Laminas\\Xml\\' => 12,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\Admin\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
        'Laminas\\Xml\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-xml/src',
        ),
        'Grav\\Plugin\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/plugin',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PicoFeed' => 
            array (
                0 => __DIR__ . '/..' . '/p3k/picofeed/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\AdminPlugin' => __DIR__ . '/../..' . '/admin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6a520eb662703b9aa0b94d2e30cc77f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6a520eb662703b9aa0b94d2e30cc77f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd6a520eb662703b9aa0b94d2e30cc77f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd6a520eb662703b9aa0b94d2e30cc77f::$classMap;

        }, null, ClassLoader::class);
    }
}
