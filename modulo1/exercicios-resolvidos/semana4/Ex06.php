<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 4 / Exercício 6
* --------------------------------------------------------------------------
* Crie um arquivo form-cadastro-aluno.php. Esse arquivo deverá apresentar
* um formulário HTML que captura as seguintes informações: nome, email,
* telefone, endereco, sexo (M ou F). Apresente no script Ex06.php as 
* informações do formulário.
* --------------------------------------------------------------------------
*/

require '../../semana4/demonstracoes/Funcoes.php';

my_var_dump($_POST);

echo "Nome: {$_POST['nome']} <br>";
echo "Email: {$_POST['email']} <br>";
echo "Telefone: {$_POST['telefone']} <br>";
echo "Endereço: {$_POST['endereco']} <br>";
echo "Sexo: {$_POST['sexo']} <br>";
