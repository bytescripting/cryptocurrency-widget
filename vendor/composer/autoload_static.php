<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a258e5eec3617052d215be68c9db3be
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a258e5eec3617052d215be68c9db3be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a258e5eec3617052d215be68c9db3be::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
