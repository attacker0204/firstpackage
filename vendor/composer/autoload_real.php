<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita21b9ad74080e5c5a348bdd57dc08f76
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

        spl_autoload_register(array('ComposerAutoloaderInita21b9ad74080e5c5a348bdd57dc08f76', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita21b9ad74080e5c5a348bdd57dc08f76', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita21b9ad74080e5c5a348bdd57dc08f76::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
