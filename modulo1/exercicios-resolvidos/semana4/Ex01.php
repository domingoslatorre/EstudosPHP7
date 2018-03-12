<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 4 / Exercício 1
* --------------------------------------------------------------------------
* Consulte a documentação do PHP (http://php.net/manual/pt_BR/) e crie um
* array a partir de uma string utilizando a função explode 
* --------------------------------------------------------------------------
*/

require '../../semana4/demonstracoes/Funcoes.php';

$nome = 'João da Silva Santos';
$meuArray = explode(' ', $nome);

my_var_dump($meuArray);