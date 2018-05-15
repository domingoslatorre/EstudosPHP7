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
    'SELECT * FROM clientes WHERE id = :id'
);

$stmt->bindValue(':id', 2);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
   $cliente = new Cliente(
       $row->nome,
       $row->email,
       (float) $row->saldo
   );
   $cliente->setId($row->id);
   $cliente->setAtivo($row->ativo);
   $cliente->setDataCadastro(new DateTime($row->dataCadastro));
}

echo '<pre>';
var_dump($cliente);
echo '</pre>';

$stmt = $conn->prepare(
    'SELECT * FROM telefones WHERE id_cliente = :id_cliente'
);

$stmt->bindValue(':id_cliente', $cliente->getId());
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
   $cliente->addTelefone($row->ddd, $row->numero);
}

echo '<pre>';
var_dump($cliente);
echo '</pre>';