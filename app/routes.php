<?php

$router->get('/', 'TasksController@index');
$router->get('/tasks', 'TasksController@index');
$router->post('/tasks', 'TasksController@store');

$router->get('/completed', 'NavbarController@completed');
$router->get('/about', 'NavbarController@about');
$router->get('/link', 'NavbarController@link');
