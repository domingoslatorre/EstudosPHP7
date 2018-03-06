<?php

//Referência a um caractere

$nome = "Jessica da Silva Santos";
echo $nome[0] ;

for ($i=0, $t = strlen($nome); $i < $t; $i++) { 
    echo "$nome[$i] </br>";
}

//Para usar o foreach é necessário converter a string em array
$nomeArray = str_split($nome);
foreach ($nomeArray as $caractere) {
    echo "$caractere </br>";
}