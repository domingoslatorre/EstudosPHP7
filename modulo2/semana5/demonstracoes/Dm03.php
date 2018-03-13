<?php

require_once 'Funcoes.php';
require_once 'AlunoVisitante.php';

$a1 = new AlunoVisitante(
    '444444', 
    'Marcia Santos', 
    'Universidade do Porto'
);

//echo $a1->origem;

my_var_dump($a1);