<?php

//Operadores Aritméticos

$n1 = 10;
$n2 = 20;
echo $n1 + $n2; //Adição
echo $n1 - $n2; //Subtração
echo $n1 * $n2; //Multiplicação
echo $n1 / $n2; //Divisão
echo $n1 % $n2; //Modulo
echo $n1 ** $n2; //Exponencial $n1 elevado a $n2

echo '</br>';

//Operadores Lógicos

$v1 = TRUE;
$v2 = FALSE;
echo $v1 && $v2;
echo $v1 || $v2;
echo !$v1; //NOT


echo '</br>';

//Operadores de Comparação
$valor1 = 12;
$valor2 = 10.0;
echo $valor1 == $valor2; //Igual
echo $valor1 === $valor2; //Idêntico, valor e tipo
echo $valor1 != $valor2; //Diferente
echo $valor1 !== $valor2; //Não Idêntico, valor ou tipo
echo $valor1 < $valor2; //Menor que
echo $valor1 > $valor2; //Maior que
echo $valor1 <= $valor2; //Menor ou igual
echo $valor1 >= $valor2; //Maior ou igual


//Incremento/Decremento
echo $valor1++; //Pós-incremento, retorna $a, e então incrementa $a em um.
echo $valor1--; //Pós-decremento, retorna $a, e então decrementa $a em um.
echo ++$valor1; //Pré-incremento, incrementa $a em um, e então retorna $a.
echo --$valor1; //Pré-Decremento, decrementa $a em um, e então retorna $a.
