<?php

require 'Funcoes.php';

//Arrays como mapas
//$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
$animais = [
    'A' => 'Cachorro', 
    'B' => 'Gato', 
    'C' => 'Abelha'
];
my_var_dump($animais);

//Modificando um elemento
$animais['B'] = 'Peixe';
my_var_dump($animais);