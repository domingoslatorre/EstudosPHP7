<?php

//Estrutura de Controle WHILE, DO WHILE, FOR, FOREACH

$i = 0;
while ($i <= 10) {
  echo "Passo $i </br>";
  $i++;
}


$i = 0;
do {
    echo "Passo $i </br>";
    $i++;
} while ($i <= 10);


for ($i = 0; $i <= 10; $i++) {
    echo "Passo $i </br>";
}

$frutas = array('Abacate', 'Limão', 'Laranja');

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i];
}

for ($i = 0, $tamanho = count($frutas); $i < $tamanho; $i++) {
    echo $frutas[$i];
}

$frutas = array('Abacate', 'Limão', 'Laranja');

foreach ($frutas as $fruta) {
  echo $fruta;
}

foreach ($frutas as $chave => $fruta) {
  echo $chave . ':' . $fruta;
}
