<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 5
* --------------------------------------------------------------------------
* Escreva um programa em PHP que avalia o conteúdo de três variáveis
* $numero1, $numero2 e $numero3 e apresenta o maior deles
* --------------------------------------------------------------------------
*/

$numero1 = 70;
$numero2 = 50;
$numero3 = 30;

if($numero1 > $numero2 && $numero1 > $numero3)
    echo $numero1;
elseif($numero2 > $numero1 && $numero2 > $numero3)
    echo $numero2;
else
    echo $numero3;
