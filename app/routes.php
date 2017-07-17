<?php

$router->get('/', 'TasksController@index');
$router->get('/tasks', 'TasksController@index');
$router->post('/tasks', 'TasksController@store');
$router->patch('/tasks', 'TasksController@update');
$router->delete('/tasks', 'TasksController@destroy');

$router->get('/completed', 'CompletedController@index');
$router->delete('/completed', 'CompletedController@destroy');

$router->get('/readme', 'ReadmeController@index');

$router->get('/link', 'LinkController@index');
