<?php
require_once 'Funcoes.php';
require_once 'Aluno.php';

//$a1 = new Aluno;
//$a2 = new Aluno();

//$a1->prontuario = '1111111';
//$a1->nome = 'João Silva';
//$a2->prontuario = '2222222';
//$a2->nome = 'Maria Gomes';

//$a1->setProntuario('1111111');
//$a1->setNome('João Silva');
//$a2->setProntuario('2222222');
//$a2->setNome('Maria Gomes')

$a1 = new Aluno('1111111', 'João Silva');
$a2 = new Aluno('2222222', 'Maria Gomes');
$a3 = new Aluno('3333333');

echo "Aluno::URL <br>";
echo $a1->getURL();

my_var_dump($a1);
my_var_dump($a2);
my_var_dump($a3);

$aluno = new Aluno('1111111', 'João Silva');
echo $aluno;
echo $a1::URL;