<?php

function classLoader($class)
{

    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = str_replace('Gaobinzhan/','',$path);
    $file = __DIR__ . '/src/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');

require_once  __DIR__ . '/src/functions.php';
