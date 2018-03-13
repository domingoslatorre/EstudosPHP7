<?php

require_once 'autoload.php';
//require_once 'classes/Montadora.php';
//require_once 'classes/Carro.php';
//require_once 'funcoes/MinhasFuncoes.php';

$m1 = new Montadora();
$m1->nome = "Chevrolet";

$c1 = new Carro();
$c1->modelo = "Cruze Sedan";
$c1->montadora = $m1;

$c2 = new Carro();
$c2->modelo = "Onix LTZ";
$c2->montadora = $m1;

echo '<pre>';
var_dump($m1, $c1, $c2);



