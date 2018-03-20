<?php

define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', dirname(__FILE__));

function loadClasses($className)
{
    $filePath = WWW_ROOT . DS . str_replace('\\', DS, $className) . '.php';
    
    if(!file_exists($filePath))
    {
        throw new Exception( "File path '{$filePath}' not found.");
    }
    
    require_once $filePath;
}

spl_autoload_register('loadClasses');