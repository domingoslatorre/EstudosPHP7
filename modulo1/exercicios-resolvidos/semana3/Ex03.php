<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 3
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um valor float que representa 
* a temperatura em Celsius, converte para Farenheit e retorna o resultado.
* Teste a função. 
* --------------------------------------------------------------------------
*/

function converterParaFarenheit($temperatura) {
    return ($temperatura * 1.8) + 32.0;
}

echo converterParaFarenheit(40.3);