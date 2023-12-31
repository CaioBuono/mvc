<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitace7b1ff58b1b581598dddb824f1d972
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

        spl_autoload_register(array('ComposerAutoloaderInitace7b1ff58b1b581598dddb824f1d972', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitace7b1ff58b1b581598dddb824f1d972', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitace7b1ff58b1b581598dddb824f1d972::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
