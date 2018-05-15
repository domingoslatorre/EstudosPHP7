<?php

require_once 'Cliente.php';
require_once 'Telefone.php';

$conn = new PDO(
    'mysql:host=localhost;dbname=b1fw2-semana10;charset=utf8', 'root', '', 
    array(
        PDO::ATTR_PERSISTENT => true
    )
);

$stmt = $conn->prepare(
    'INSERT INTO clientes (nome, email, saldo, ativo, dataCadastro) 
    VALUES (:nome, :email, :saldo, :ativo, :dataCadastro)'
);

$c1 = new Cliente('Maria Gomes Pereira', 'maria@gmail.com', 1340.85);

$stmt->bindValue(':nome', $c1->getNome());
$stmt->bindValue(':email', $c1->getEmail());
$stmt->bindValue(':saldo', $c1->getSaldo());
$stmt->bindValue(':ativo', $c1->getAtivo(), PDO::PARAM_BOOL);
$stmt->bindValue(':dataCadastro', $c1->getDataCadastro()->format('Y-m-d H:i:s'));
$stmt->execute();
$c1->setId($conn->lastInsertId());


$t1 = new Telefone('11','333333333');
$t2 = new Telefone('22','444444444');

$stmt = $conn->prepare(
    'INSERT INTO telefones (ddd, numero, id_cliente) 
    VALUES (:ddd, :numero, :id_cliente)'
);

$stmt->bindValue(':ddd', $t1->getDdd());
$stmt->bindValue(':numero', $t1->getNumero());
$stmt->bindValue(':id_cliente', $c1->getId());
$stmt->execute();


$stmt->bindValue(':ddd', $t2->getDdd());
$stmt->bindValue(':numero', $t2->getNumero());
$stmt->bindValue(':id_cliente', $c1->getId());
//$stmt->execute();

