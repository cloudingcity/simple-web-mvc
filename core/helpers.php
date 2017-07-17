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
 *
 * @throws \Exception
 */
function request($key)
{
    if ($_REQUEST[$key]) {
        return htmlentities($_REQUEST[$key]);
    }
}

/**
 * Redirect to the path.
 *
 * @param string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}

/**
 * Make form method spoofing
 *
 * @param string $httpVerb
 * @return <input>
 */
function method_field($httpVerb)
{
    $httpVerb = ucwords($httpVerb);
    return "<input type=\"hidden\" name=\"_method\" value=\"{$httpVerb}\">";
}
