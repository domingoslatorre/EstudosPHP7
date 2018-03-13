<?php

require_once 'autoload.php';

$m1 = new Montadora();
$m1->nome = "Chevrolet";

$c1 = new Carro();
$c1->modelo = "Cruze Sedan";
$c1->montadora = $m1;

$c2 = new Carro();
$c2->modelo = "Onix LTZ";
$c2->montadora = $m1;

$control = new CarroController();
$control->carro = $c1;

echo '<pre>';
var_dump($m1, $c1, $c2, $control);

