<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc13398b9420f544e4d87a9acbb33842b
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

        spl_autoload_register(array('ComposerAutoloaderInitc13398b9420f544e4d87a9acbb33842b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc13398b9420f544e4d87a9acbb33842b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc13398b9420f544e4d87a9acbb33842b::getInitializer($loader));

        $loader->setApcuPrefix('S3XUBlFf4s7FQfb6z4Blf');
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc13398b9420f544e4d87a9acbb33842b::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec13398b9420f544e4d87a9acbb33842b($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec13398b9420f544e4d87a9acbb33842b($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
