<?php

//phpinfo();
//exit;

//Entry Point

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\{Router, Request}; // only PHP7

error_reporting(E_ALL & ~E_NOTICE);

Router::load('app/routes.php')->direct(Request::uri(), Request::method());