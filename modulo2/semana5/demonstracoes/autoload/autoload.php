<?php

function __autoload($classname) {
    require_once 'classes' . DIRECTORY_SEPARATOR . $classname . '.php';
}