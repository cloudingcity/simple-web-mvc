# web-mvc

Online view: [demo](http://demo.clouding.city)

## Routing

*Path: app/routes.php*

```php
<?php

$router->get('/', 'HelloControllers@index');
$router->post('/', 'HelloControllers@store');
```

## Config

```php
cp example.config.php config.php
```

## Helper functoin

- `dd(...$args)`: Var_dump value and die.
- `view(string $name, array $data)`: Show view and pass data. 
- `uri()`: Get current uri.
- `request($key)`: Get user request.
- `redirect($path)`: Redirect to the path.

## Custom 404 page

Edit *app/Views/404.view.php*

