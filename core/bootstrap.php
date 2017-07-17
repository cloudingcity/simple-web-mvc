<?php

use Core\App;
use Core\database\Model;
use Core\database\Connection;

/**
 * Bind config to app registry.
 */
App::bind('config', require '../config.php');


/**
 * Set Model Connection.
 */
Model::setPDO(
    Connection::make(App::get('config')['database'])
);
