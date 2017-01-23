<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\ContactController' => __DIR__ . '/../..' . '/app/controllers/ContactController.php',
        'App\\Controllers\\FileManagementController' => __DIR__ . '/../..' . '/app/controllers/FileManagementController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\Pagescontroller' => __DIR__ . '/../..' . '/app/controllers/Pagescontroller.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Mailer' => __DIR__ . '/../..' . '/app/models/Mailer.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInitb07c6b2ac2b0c03e801f52367d7d12cb' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb07c6b2ac2b0c03e801f52367d7d12cb::$classMap;

        }, null, ClassLoader::class);
    }
}
