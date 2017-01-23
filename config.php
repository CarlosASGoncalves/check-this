<?php 

return [

	'database' => [

		'dbuser' => 'root', //root for vm(s)

		'pass' => '123',

		'port' => '3306',

		'dbname' => 'todos', //todos for vm(s)

		'host' => 'mysql:host=127.0.0.1',

		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]
	]

];