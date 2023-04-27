<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a22dbc4b23871a30110acc981031e7d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Operators\\' => 14,
            'App\\CRUD\\' => 9,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Operators\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Operators',
        ),
        'App\\CRUD\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/CRUD',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Builder' => __DIR__ . '/../..' . '/App/Builder.php',
        'App\\CRUD\\From' => __DIR__ . '/../..' . '/App/CRUD/From.php',
        'App\\CRUD\\Insert' => __DIR__ . '/../..' . '/App/CRUD/Insert.php',
        'App\\CRUD\\Select' => __DIR__ . '/../..' . '/App/CRUD/Select.php',
        'App\\Operators\\Where' => __DIR__ . '/../..' . '/App/Operators/Where.php',
        'App\\QueryBuilder' => __DIR__ . '/../..' . '/App/QueryBuilder.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a22dbc4b23871a30110acc981031e7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a22dbc4b23871a30110acc981031e7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a22dbc4b23871a30110acc981031e7d::$classMap;

        }, null, ClassLoader::class);
    }
}
