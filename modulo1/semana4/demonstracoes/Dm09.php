<?php

require 'Funcoes.php';

//Funções empty e isset

$animais = [
    'A' => 'Cachorro', 
    'B' => 'Gato', 
    'C' => 'Abelha'
];

$numeros = [];

echo '$animais vazio?: ' . empty($animais) . '</br>'; //false
echo '$numeros vazio?: ' . empty($numeros) . '</br>'; //true
echo 'Chave A de $animais setada?: ' . isset($animais['A']) . '<br>'; //true
echo 'Chave G de $animais setada?: ' . isset($animais['G']) . '<br>'; //false
echo 'Chave 0 de $numeros setada?: ' . isset($numeros[0]) . '<br>'; //false