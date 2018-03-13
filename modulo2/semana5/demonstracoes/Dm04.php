<?php

require_once 'Funcoes.php';
require_once 'HTMLHelper.php';
require_once 'Produto.php';

echo HTMLHelper::h1('Título Principal');
echo HTMLHelper::h2('Título Secundário', '', 'grande');

$p1 = new Produto('Mouse sem Fio Wireless');
$p2 = new Produto('Papel Sulfite A4');

echo $p2->$contador;
$p2::$contador = 7;
Produto::$contador = 9;

$p3 = new Produto('Caneca Personalizada com Foto');

my_var_dump($p1);
my_var_dump($p2);
my_var_dump($p3);

echo "$p1 <br>";
echo "$p2 <br>";
echo "$p3 <br>";
