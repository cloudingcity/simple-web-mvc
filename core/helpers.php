<?php

/**
 * Var_dump and die.
 *
 * @param array ...$args
 */
function dd(...$args)
{
    die(var_dump($args));
}
