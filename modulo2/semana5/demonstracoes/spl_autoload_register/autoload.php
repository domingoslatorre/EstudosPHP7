<?php

function loadModels($classname) {
    $arquivo = 'classes' . DIRECTORY_SEPARATOR . 'models'.  DIRECTORY_SEPARATOR . $classname . '.php';
    if(file_exists($arquivo))
        require_once $arquivo;
}

function loadControllers($classname) {
    $arquivo = 'classes' . DIRECTORY_SEPARATOR . 'controllers'.  DIRECTORY_SEPARATOR . $classname . '.php';
    if(file_exists($arquivo))
        require_once $arquivo;
}

spl_autoload_register('loadModels');
spl_autoload_register('loadControllers');