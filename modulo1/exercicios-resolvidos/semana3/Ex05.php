<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 5
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um valor float que representa 
* a temperatura e um valor string que representa a escala ("C" para Celsius 
* e "F" para Farenheit. Se a escala estiver em Celsius, deverá ser retornado
* o valor da temperatura em Farenheit, caso contrario, retornar a temperatura
* em Celsius.
* Teste a Função.
* --------------------------------------------------------------------------
*/


function converterTemperatura($temperatura, $escala) {
    if($escala == 'C')
        return ($temperatura * 1.8) + 32.0;
    else    
        return ($temperatura - 32.0) / 1.8;
        
}

converterTemperatura(200.0, 'C');