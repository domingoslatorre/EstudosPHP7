<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 1
* --------------------------------------------------------------------------
* Crie uma função que recebe como parâmetro dois números inteiros e
* retorne a seguinte mensagem:
*  O Resultado da Soma é: ?
*  O Resultado da Subtração é: ?
* Teste a função.
* --------------------------------------------------------------------------
*/

function exibirOperacoes($n1, $n2) {
    $soma = $n1 + $n2;
    $subtracao  = $n1 - $n2;
    echo "O Resultado da Soma é $soma";
    echo "O Resultado da Subtração é $subtracao";
}

exibirOperacoes(20, 3);