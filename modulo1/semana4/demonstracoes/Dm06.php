<?php

require 'Funcoes.php';

//Inicializando arrays... 
$animais = array('Cachorro', 'Gato', 'Abelha');
$numeros = [1, 2.3, 4, 5];

my_var_dump($animais);
my_var_dump($numeros);

//Inserindo Elementos
$animais[] = 'Ovelha';
$numeros[] = 6;

my_var_dump($animais);
my_var_dump($numeros);

//Modificando Elementos
$animais[0] = 'Peixe';
my_var_dump($animais);

//Removendo Um Elemento do Array
unset($animais[1]); 
my_var_dump($animais);

//Reindexar os Elementos
$animais = array_values($animais);
my_var_dump($animais);

//Removendo Todos os Elementos do Array
unset($animais);

//Variável não está mais definida devido ao unset
my_var_dump($animais);


