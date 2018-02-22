<?php

function contarOcorrencias($elemento, $colecao)
{
  $numeroDeElementos = 0;
  foreach ($colecao as $item) {
    if($item === $elemento){
      $numeroDeElementos++;
    }
  }
  return $numeroDeElementos;
}

$frutas = array('banana', 'maçã', 'abacate', 'abacate', 'uva', 'maçã', 'maçã');
$notas = array(10, 10, 10, 9.5, 8, 8.3, 8, 9);


//echo contarOcorrencias('abacate', $frutas);
echo contarOcorrencias(10, $notas);
