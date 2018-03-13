<?php

require_once 'Funcoes.php';
require_once 'Filme.php';


$f1 = new Filme('A Forma da Água', 'The Shape of Water', 150);

echo $f1->titulo;

my_var_dump($f1);

$f1->duracao = 123;

my_var_dump($f1);