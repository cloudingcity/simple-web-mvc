<?php

require '../vendor/autoload.php';
require '../core/helpers.php';

use Core\Router;
use Core\Request;

Router::load('../app/routes.php')
    ->direct(Request::uri(), Request::method());
