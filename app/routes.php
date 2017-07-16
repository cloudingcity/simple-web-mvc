<?php

$router->get('/task', 'NavbarController@task');
$router->get('/about', 'NavbarController@about');
$router->get('/contact', 'NavbarController@contact');
$router->get('/', 'TasksController@index');
