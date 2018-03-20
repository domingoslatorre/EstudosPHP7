<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 5 / Exercício 2
* --------------------------------------------------------------------------
* Implemente em PHP a classe Produto com os atributos codigo (int),  
* nome (string), descricao (string), valorCompra (float)
* estoqueMinimo (int), estoqueMaximo (int).
* A classe deverá ter os métodos: 
*  - construtor com parâmetros para nome, descrição e valorCompra
*  - definirRegrasEstoque com parâmentros para estoqueMinimo e estoqueMaximo
*  - getValorVenda que deverá retornar o valorCompra vezes uma margem de 
*    lucro de 50% 
* Teste a classe neste arquivo criando 3 objetos. Teste todos os 
* métodos. Utilize var_dump para verificar os objetos.
--------------------------------------------------------------------------
*/

require 'Funcoes.php';
require 'Produto.php';

$p1 = new Produto(1, 'Caneta', 'Caneta esferográfica ...', 0.35);
$p2 = new Produto(2, 'Régua', 'Régua de alumínio', 2.50);
$p3 = new Produto(3, 'Estojo', 'Estojo escolar ...', 12.00);

my_var_dump($p1, $p2, $p3);

$p1->definirRegrasEstoque(50, 100);
$p2->definirRegrasEstoque(20, 80);
$p3->definirRegrasEstoque(5, 10);

my_var_dump($p1, $p2, $p3);

my_var_dump(
    $p1->getValorVenda(), 
    $p2->getValorVenda(), 
    $p3->getValorVenda()
);
