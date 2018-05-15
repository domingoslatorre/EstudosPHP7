<?php

require_once 'Aluno.php';

//Abrir Conexão com o Banco de Dados
$conn = new PDO(
    'mysql:host=localhost;dbname=b1fw2-semana10;charset=utf8', 'root', ''
);


//Abrir Conexão Persistente - Não será fechada no final do script - armazenada em cache sendo
//reutilizada quando outro script solicitar uma conexao usando as mesmas credenciais 
$conn2 = new PDO(
    'mysql:host=localhost;dbname=b1fw2-semana10;charset=utf8', 'root', '', 
    array(
        PDO::ATTR_PERSISTENT => true
    )
);

//Fechar uma conexão
$conn = NULL;

//Prepared Statements
$stmt = $conn2->prepare(
    'INSERT INTO alunos (nome, email) VALUES (:nome, :email)'
);

$nome = 'João da Silva';
$email = 'joao@gmail.com';

//bindValue - Valores são passados
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':email', $email);
$stmt->execute();


$aluno = new Aluno('Maria do Santos Gomes', 'maria@gmail.com');
$stmt->bindValue(':nome', $aluno->getNome());
$stmt->bindValue(':email', $aluno->getEmail());
$stmt->execute();


//bindParam - Referências são passadas
$stmt2 = $conn2->prepare(
    'INSERT INTO alunos (nome, email) VALUES (:nome, :email)'
);

$stmt2->bindParam(':nome', $nome);
$stmt2->bindParam(':email', $email);

$nome = 'Pedro Silva';
$email = 'pedro@gmail.com';
$stmt2->execute();

$nome = 'Lucas Costa';
$email = 'lucas@gmail.com';
$stmt2->execute();
