<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 7
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro um ou mais floats e calcula 
* a média aritmética. A função deverá funcinar corretamente em todos 
* os seguintes casos:
* calcularMedia(2.2, 3.5)
* calcularMedia(10.0, 9.2, 8.6, 10.3)
* calcularMedia(1.0, 2.0, 3.1)
* --------------------------------------------------------------------------
*/

function calcularMedia(float ...$numeros) : float {
    $media = 0;
    foreach ($numeros as $numero) {
        $media += $numero;
    }
    return ($media/count($numeros));
}

echo calcularMedia(10, 9.3, 8.2);