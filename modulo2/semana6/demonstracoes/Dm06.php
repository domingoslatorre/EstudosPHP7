<?php

require 'src/autoload.php';
require 'Funcoes.php';

use Associacao\Reflexiva\ComponenteCurricular;

$mat1 = new ComponenteCurricular('Matematica 1', '...');
$mat2 = new ComponenteCurricular('Matematica 2', '...', $mat1);
$mat3 = new ComponenteCurricular('Matematica 3', '...', $mat2);


my_var_dump($mat1, $mat2, $mat3);

