<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 4
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um valor float que representa 
* a temperatura em Farenheit, converte para Celsius e retorna o resultado.
* Teste a função. 
* --------------------------------------------------------------------------
*/

function converterParaCelsius($temperatura) {
    return ($temperatura - 32.0) / 1.8;
}

echo converterParaCelsius(200.0);