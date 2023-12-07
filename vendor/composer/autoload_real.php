<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff7758ae1e974f1a650ce5d14e70bf31
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

        spl_autoload_register(array('ComposerAutoloaderInitff7758ae1e974f1a650ce5d14e70bf31', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff7758ae1e974f1a650ce5d14e70bf31', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff7758ae1e974f1a650ce5d14e70bf31::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}