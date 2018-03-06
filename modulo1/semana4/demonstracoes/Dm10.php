<?php

require 'Funcoes.php';

$animais = [
    'A' => 'Cachorro', 
    'B' => 'Gato', 
    'C' => 'Abelha'
];

$numeros = [10, 11, 12, 5.0];

//Função in_array 
echo 'O Array $animais contém Cachorro: ' . in_array('Cachorro', $animais) . '</br>'; //true
echo 'O Array $animais contém cachorro: ' . in_array('cachorro', $animais) . '</br>'; //false
echo 'O Array $numeros contém 5: ' . in_array(5, $numeros) . '</br>'; //true
echo 'O Array $numeros contém 5.0: ' . in_array(5.0, $numeros) . '</br>'; //true
echo 'O Array $numeros contém 5: ' . in_array(5, $numeros, true) . '</br>'; //Checa o tipo também //false

//Função array_search 
echo 'Em qual posição está Cachorro: ' . array_search('Cachorro', $animais) . '</br>'; //'A'
echo 'Em qual posição está cachorro: ' . array_search('cachorro', $animais) . '</br>'; // false
echo 'Em qual posição está 5: ' . array_search(5, $numeros) . '</br>'; //3