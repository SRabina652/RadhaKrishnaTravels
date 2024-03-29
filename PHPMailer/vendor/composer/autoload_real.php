<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0c6af5e29e55de5f0781b5b85c35dc24
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit0c6af5e29e55de5f0781b5b85c35dc24', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0c6af5e29e55de5f0781b5b85c35dc24', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0c6af5e29e55de5f0781b5b85c35dc24::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
