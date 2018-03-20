<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 5 / Exercício 1
* --------------------------------------------------------------------------
* Implemente em PHP a classe Conta que representa uma conta bancária com 
* os atributos número (int) e saldo (float). Essa classe deverá ter
* os métodos consultarSaldo, sacar e depositar.
* Teste a classe neste arquivo criando 3 objetos. Teste todos os 
* métodos. Utilize var_dump para verificar os objetos.
--------------------------------------------------------------------------
*/

require 'Funcoes.php';
require 'Conta.php';

$c1 = new Conta(1);
$c2 = new Conta(2);
$c3 = new Conta(3);

my_var_dump($c1, $c2, $c3);

$c1->depositar(200.00);
my_var_dump($c1);
$c1->sacar(122.33);
my_var_dump($c1);
$c1->sacar(77.00);
my_var_dump($c1);
$c1->sacar(1);
my_var_dump($c1);
