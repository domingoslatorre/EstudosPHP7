<?php 

require_once 'src/autoload.php';
require_once 'Funcoes.php';

use Interfaces\Usuario;
use Interfaces\UsuarioServicos;
use Interfaces\UsuarioDados;
use Interfaces\UsuarioDadosMemoria;

$ud = new UsuarioDadosMySQL();
$us = new UsuarioServicos($ud);

$us->registrar('joão@gmail.com', '123456');
$us->registrar('maria@gmail.com', 'abcdef');
$us->registrar('pedro@gmail.com', 'abcdef');

my_var_dump($us);
my_var_dump($ud);

my_var_dump($ud->obterPorEmail('joao@gmail.com'));
my_var_dump($ud->obterPorEmail('joão@gmail.com'));