# web-mvc

Online view: [demo](http://demo.clouding.city)

## Routing

*Path: app/routes.php*

```php
<?php

$router->get('/', 'HelloControllers@index');
$router->post('/', 'HelloControllers@store');
$router->patch('/', 'HelloControllers@update');
$router->delete('/', 'HelloControllers@destroy');
```

## Model

*Path: app/Models/*.php*

Create a model and extends `Core\database\Model`, and set `$table={yourDataTable}`.

```php
<?php

namespace App\Models;

use Core\database\Model;

class Task extends Model
{
    /**
     * Data table name.
     *
     * @var string
     */
    protected $table = 'tasks';
}
```

And then you can use Query Builder for this Mode.

### Query Builder

```php
use App\Models\Task;
```

#### Get


```php
// Get all data
$tasks = Task::all();

// or
$tasks = Task::select('*')
    ->where(['is_completed', '=', 0], ['deleted_at', 'is', 'NULL'])
    ->order('created_at', 'DESC')
    ->limit('5')
    ->get();
```

#### Insert
```php
Task::create([
    'title' => request('title'),
    'body' => nl2br(request('body')),
    'created_at' => date('Y-m-d H:i:s')
]);
```

#### Update
```php
Task::select()
    ->where(['id', '=', request('id')])
    ->update(['is_completed', 1], ['updated_at', date('Y-m-d H:i:s')]);
```


#### Delete

```php
Task::select()
    ->where(['id', '=', request('id')])
    ->delete();
```



## Config

```php
cp example.config.php config.php
```

## Registry

*Path: core/bootstrap.php*

You can bind your value:

```php
App::bind('fruits', ['apple', 'pieapple', 'banana']);
```

And get anywhere:

```php
App::get('fruits');
```

## Helper functoin

- `dd(...$args)`: Var_dump value and die.
- `view(string $name, array $data)`: Show view and pass data. 
- `uri()`: Get current uri.
- `request($key)`: Get user request.
- `redirect($path)`: Redirect to the path.
- `method_field($httpVerb)`: Make form method spoofing.

## Custom 404 page

Edit *app/Views/404.view.php*

