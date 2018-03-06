<?php

require 'Funcoes.php';

//Ordenar Arrays

//sort - valor -  não mantém as associações chave-valor - menor para maior
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
sort($animais);
my_var_dump($animais);

//sort - valor -  não mantém as associações chave-valor - maior para menor
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
rsort($animais);
my_var_dump($animais);

//asort - valor -  mantém as associações chave-valor - menor para maior
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
asort($animais);
my_var_dump($animais);

//arsort - valor -  mantém as associações chave-valor - maior para menor
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
arsort($animais);
my_var_dump($animais);

//ksort - chave -  mantém as associações chave-valor - menor para maior
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
ksort($animais);
my_var_dump($animais);

//krsort - chave -  mantém as associações chave-valor - maior para menor
$animais = ['A' => 'Cachorro', 'B' => 'Gato', 'C' => 'Abelha'];
krsort($animais);
my_var_dump($animais);