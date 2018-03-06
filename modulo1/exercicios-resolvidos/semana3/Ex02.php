<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 2
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um array de números e retorna 
* a média aritmética. Teste a função com os array:
* $notas = array(10.0, 10.0, 9.0, 3.5);
* --------------------------------------------------------------------------
*/


function calcularMedia($numeros) {
    $soma = 0;
    $quantidade = count($numeros);
    
    foreach ($numeros as $numero) {
        $soma += $numero;
    }

    return $soma/$quantidade;
}

$notas = array(10.0, 10.0, 9.0, 3.5);
echo calcularMedia($notas);