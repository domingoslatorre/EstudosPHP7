<?php

require 'Funcoes.php';


//Teste passagem por valor e referência array e object
class Pessoa {
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

function modificarArray(array &$array) {
    $array[0] = 'Cristina';
}

function modificarObjeto(Pessoa $pessoa) {
    $pessoa->nome = 'Pedro';
}


$nomes = ['João', 'Maria', 'José', 'Pedro'];

my_var_dump($nomes);
modificarArray($nomes);
my_var_dump($nomes);

$p1 = new Pessoa('João');
my_var_dump($p1);
modificarObjeto($p1);
my_var_dump($p1);

