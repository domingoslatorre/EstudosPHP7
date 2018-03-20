<?php

require_once 'src/autoload.php';
require_once 'Funcoes.php';

//use Associacao\Agregacao\Aluno;
//use Associacao\Agregacao\Telefone;
use Associacao\Agregacao\{Aluno, Telefone};


$t1 = new Telefone('11', '1111-1111');
$a1 = new Aluno('João Santos', $t1);
$a2 = new Aluno('Maria Santos', $t1);
my_var_dump($t1, $a1, $a2);

$t1->setDdd('22');
$t1->setNumero('2222-2222');
my_var_dump($t1, $a1, $a2);
