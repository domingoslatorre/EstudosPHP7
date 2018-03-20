<?php

require 'src/autoload.php';
require 'Funcoes.php';

use Associacao\Atributos\{Aluno, Telefone};

$a1 = new Aluno('João Santos', '11', '1111-1111');

my_var_dump($a1);

$a1->addTelefone('22', '2222-2222');
$a1->addTelefone('33', '3333-3333');

my_var_dump($a1);
