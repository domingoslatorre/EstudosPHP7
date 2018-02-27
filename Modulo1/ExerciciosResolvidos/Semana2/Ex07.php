<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 7
* --------------------------------------------------------------------------
* Escreva um programa que a partir de três variáveis lado1, lado2 e lado3, que
* representam os lados de um triângulo, escreva se ele é Equilátero,
* Isósceles ou Escaleno. Sendo que:
* − Triângulo Equilátero: possui os 3 lados iguais.
* − Triângulo Isóscele: possui 2 lados iguais.
* − Triângulo Escaleno: possui 3 lados diferentes
* --------------------------------------------------------------------------
*/

$lado1 = 12;
$lado2 = 10;
$lado3 = 11;

if($lado1 == $lado2 && $lado1 == $lado3)
  echo 'Triângulo Equilátero';
elseif($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1)
  echo 'Triângulo Isóscele';
else
  echo 'Triângulo Escaleno';
