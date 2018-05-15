<?php 

require_once 'src/autoload.php';
require_once 'Funcoes.php';

use Heranca\Venda;
use Heranca\Vendedor;
use Heranca\VendedorFixo;

$v1 = new Vendedor('João', 15);
$v1->addVenda(new Venda(2200.00));
$v1->addVenda(new Venda(1300.50));
$v1->addVenda(new Venda(5000.50));
echo $v1->calcularSalario();

$v2 = new VendedorFixo('Maria', 10, 2000.00);
$v2->addVenda(new Venda(400.00));
echo $v2->calcularSalario();


my_var_dump($v1);
my_var_dump($v2);