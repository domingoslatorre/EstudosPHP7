<?php

require 'Funcoes.php';

//Inicializando arrays... 

$pessoas = array();
$animais = array('Cachorro', 'Gato', 'Abelha');
$itens = [];
$filmes = ['The Star', 'Happy End', 'Wonder'];
$numeros = [1, 2.3, 4, 5];

//echo $filmes; não funciona, apenas com index definido ex: echo $filmes[0];

my_var_dump($filmes);
my_print_r($filmes);

my_var_dump($pessoas);
my_var_dump($animais);
my_var_dump($itens);
my_var_dump($filmes);
my_var_dump($numeros);



