<?php

require 'src/autoload.php';
require 'Funcoes.php';

use Associacao\Composicao\{Aluno, Telefone};

$a1 = new Aluno('João Santos', '11', '1111-1111');
$a2 = new Aluno('Maria Santos', '22', '2222-2222');

my_var_dump($a1, $a2);
