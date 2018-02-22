<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 8
* --------------------------------------------------------------------------
* Escreva um programa em PHP que a partir de um número inteiro representado
* pela variável $n escreva a soma de todos os números de 1 até $n.
* --------------------------------------------------------------------------
*/

$n = 10;
$soma = 0;

for($i=1; $i<=$n; $i++) {
  $soma += $i;
}

echo $soma;
