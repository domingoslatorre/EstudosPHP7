<?php

function somar(int ...$numeros) : int
{
    $soma = 0;
    foreach ($numeros as $numero) {
        $soma += $numero;
    }
    return $soma;
}

echo somar(1, 4);
echo somar(1, 3, 5, 6);
