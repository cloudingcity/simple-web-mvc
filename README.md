# web-mvc

Online view: [demo](demo.clouding.city)

## Routing

*Path: app/routes.php*

```php
<?php

$router->get('/', 'HelloControllers@index');
$router->post('/', 'HelloControllers@store');
```

## Helper functoin

- `dd(...$args)`: Var_dump value and die.
- `view(string $name, array $data)`: Show view and pass data. 
- `uri()`: Get current uri.

## Custom 404 page

Edit *app/Views/404.view.php*

