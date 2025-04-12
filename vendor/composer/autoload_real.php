<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite051b42f948ca9881f4e1ff080e8f107
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

        spl_autoload_register(array('ComposerAutoloaderInite051b42f948ca9881f4e1ff080e8f107', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite051b42f948ca9881f4e1ff080e8f107', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite051b42f948ca9881f4e1ff080e8f107::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
