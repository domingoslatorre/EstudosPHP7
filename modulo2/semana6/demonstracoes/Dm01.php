<?php

require_once 'src/autoload.php';
require_once 'Funcoes.php';

use Dependencia\{Cliente, Funcionario, ClienteService, FuncionarioService, ValidadorCPF};

$cliente = new Cliente('111.111.111-11', 'Pedro Gomes');
$clienteService = new ClienteService();
$clienteService->cadastrar($cliente);

$funcionario = new Funcionario('222.222.222-22', 'Patricia Souza');
$funcionarioService = new FuncionarioService();
$funcionarioService->cadastrar($funcionario);