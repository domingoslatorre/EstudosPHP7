<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 9
* --------------------------------------------------------------------------
* Escreva um programa em PHP que a partir de um número inteiro representado
* pela variável $n escreva a soma de todos os números pares de 2 até $n.
* --------------------------------------------------------------------------
*/

$n = 10;
$soma = 0;

for($i=2; $i<=$n; $i++) {
  if($i % 2 == 0){
    $soma += $i;
  }
}

echo $soma;
