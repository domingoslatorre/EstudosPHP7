<?php

require_once 'Cliente.php';


$conn = new PDO(
    'mysql:host=localhost;dbname=b1fw2-semana10;charset=utf8', 'root', '', 
    array(
        PDO::ATTR_PERSISTENT => true
    )
);

//Prepared Statements
$stmt = $conn->prepare(
    'INSERT INTO clientes (nome, email, saldo, ativo, dataCadastro) 
    VALUES (:nome, :email, :saldo, :ativo, :dataCadastro)'
);

$c1 = new Cliente('Marta Santos', 'marta@gmail.com', 1340.85);
$c2 = new Cliente('Melissa Lopes', 'melissa@gmail.com', 100304.32);


$stmt->bindValue(':nome', $c1->getNome());
$stmt->bindValue(':email', $c1->getEmail());
$stmt->bindValue(':saldo', $c1->getSaldo());
$stmt->bindValue(':ativo', $c1->getAtivo(), PDO::PARAM_BOOL);
$stmt->bindValue(':dataCadastro', $c1->getDataCadastro()->format('Y-m-d H:i:s'));
$stmt->execute();