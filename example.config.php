<?php

return [
    'database' => [
        'name'       => 'test',
        'username'   => 'root',
        'password'   => 'root',
        'connection' => 'mysql:host=127.0.0.1',
        'option'     => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
