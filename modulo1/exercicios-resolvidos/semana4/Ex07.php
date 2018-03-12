<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 4 / Exercício 7
* --------------------------------------------------------------------------
* Crie um arquivo form-login.php. Esse arquivo deverá apresentar
* um formulário HTML que captura as seguintes informações: email e senha.
* Verifique no script Ex07.php se o email é igual a "aluno@email.com" e 
* senha "123456". 
* --------------------------------------------------------------------------
*/

require '../../semana4/demonstracoes/Funcoes.php';

//my_var_dump($_POST);

//Pode ser refatorado em funções ou classes de validação
$erros = [];

if(!isset($_POST['email'])){
    $erros[] = 'Campo email não definido.';
}

if(!isset($_POST['senha'])){
    $erros[] = 'Campo senha não definido.';
}

if(empty($_POST['email'])){
    $erros[] = 'O email não pode ser vazio.';
}

if(empty($_POST['senha'])){
    $erros[] = 'A senha não pode ser vazia.';
}

if(empty($erros)) {
    if($_POST['email'] == 'aluno@email.com' && $_POST['senha'] == '123456') {
        echo "Seja bem vindo ao Sistema!";
    }
} else {
    $erros[] = 'Email ou senha incorretos';
    //Armazenar erros na sessão
    session_start();
    $_SESSION['erros'] = $erros;
    //Redireciona para o form de login - http://php.net/manual/pt_BR/function.header.php
    header('Location: form-login.php');
}
