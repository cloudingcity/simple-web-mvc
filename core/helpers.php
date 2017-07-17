<?php

/**
 * Var_dump values and die.
 *
 * @param array ...$args
 */
function dd(...$args)
{
    die(var_dump($args));
}

/**
 * Show view and pass data.
 *
 * @param $name
 * @param array $data
 * @return /app/Views/.view.php
 */
function view($name, $data = [])
{
    extract($data);
    return require "../app/Views/{$name}.view.php";
}

/**
 * Get current uri.
 *
 * @return string
 */
function uri()
{
    return Core\Request::uri();
}

/**
 * Get user request.
 *
 * @param $key
 * @return string
 */
function request($key)
{
    if (isset($_REQUEST[$key])) {
        return htmlentities($_REQUEST[$key]);
    }
    return '';
}

/**
 * Redirect to the path.
 *
 * @param $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
