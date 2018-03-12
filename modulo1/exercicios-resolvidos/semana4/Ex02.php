<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 4 / Exercício 2
* --------------------------------------------------------------------------
* Consulte a documentação do PHP (http://php.net/manual/pt_BR/) e crie uma
* string a partir de um array utilizando a função implode 
* --------------------------------------------------------------------------
*/

require '../../semana4/demonstracoes/Funcoes.php';

$frutas = ['limão', 'laranja', 'morango'];
$frutasString = implode('-', $frutas);

echo $frutasString;