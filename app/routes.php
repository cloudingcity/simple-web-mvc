<?php

$router->get('/task', 'NavbarController@task');
$router->get('/about', 'NavbarController@about');
$router->get('/link', 'NavbarController@link');
$router->get('/', 'TasksController@index');
