<?php 

require_once 'src/autoload.php';
require_once 'Funcoes.php';

use ClasseAbstrata\Conta;
use ClasseAbstrata\ContaCorrente;
use ClasseAbstrata\ContaPoupanca;

$c1 = new ContaCorrente(1, 2000);
$c2 = new ContaCorrente(2, 2000);
$c3 = new ContaPoupanca(3);

$contas = [$c1, $c2, $c3];

$totalPagoEmTarifas = 0;

foreach ($contas as $conta) {
    $totalPagoEmTarifas += $conta->calcularTarifa();
}

echo $totalPagoEmTarifas;

my_var_dump($c1);
my_var_dump($c2);
my_var_dump($contas);
