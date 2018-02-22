<?php

//Estrutura de Controle IF, IF/ELSE, ELSEIF, SWITH

$idade = 19;

if($idade > 18)
    echo 'maior de idade';


if($idade > 18)
    echo 'maior de idade';
else
    echo 'menor de idade';

if($idade > 18) {
    echo 'maior de idade';
    echo '...';
} else {
    echo 'menor de idade';
}

$a = 12;
$b = 10;

if ($a > $b) {
    echo "a é maior que b";
} elseif ($a == $b) {
    echo "a é igual a b";
} else {
    echo "a é menor que b";
}

$a = 1;
switch ($a) {
  case 0:
      echo 'a é igual a 0';
      break;
  case 1:
      echo 'a é igual a 1';
      break;
  default:
        echo 'opção padrão';
        break;
}
