<?php

//Escopo Global e Local

$nome = 'João';

function imprimirNome() {
  global $nome;
  echo $nome;
}

imprimirNome();
