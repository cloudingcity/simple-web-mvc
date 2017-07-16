<?php

require '../vendor/autoload.php';

use Core\Router;
use Core\Request;


Router::load('../app/routes.php')
    ->direct(Request::uri(), Request::method());
