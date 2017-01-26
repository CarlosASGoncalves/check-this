<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('devlog');

// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__ . '/log/dev.log', Logger::ERROR));
$logger->pushHandler(new FirePHPHandler());

return [

	'database' => [

		'dbuser' => 'root',

		'pass' => '123',

		'port' => '3306',

		'dbname' => 'check_this',

		'host' => 'mysql:host=127.0.0.1',

		'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]
	],

    'logger' => $logger

];
