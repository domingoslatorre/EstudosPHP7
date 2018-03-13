<?php

require_once 'Funcoes.php';
require_once 'TesteDestrutor.php';

$teste = new TesteDestrutor('1');
my_var_dump($teste);

unset($teste);

$teste2 = new TesteDestrutor('2');
my_var_dump($teste2);

echo 'objeto 2 ainda ativo? <br><br>';
