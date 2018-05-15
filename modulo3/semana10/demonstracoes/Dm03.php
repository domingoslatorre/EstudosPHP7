<?php
function my_var_dump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre><hr>';
}

$conn = new PDO(
    'mysql:host=localhost;dbname=b1fw2-semana10;charset=utf8', 'root', '', 
    array(
        PDO::ATTR_PERSISTENT => true
    )
);

//Prepared Statements
$stmt = $conn->prepare(
    'SELECT * FROM clientes'
);


//fetch - retorna a próxima linha
//PDO::FETCH_BOTH - Array com id e nome das colunas
//PDO::FETCH_ASSOC - Array com nome das colunas
//PDO::FETCH_OBJ - Objeto com propriedades com mesmo nome das colunas
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    my_var_dump($row);
}

//fetchAll - retorna um array com todos os resultados
$stmt->execute();
my_var_dump($stmt->fetchAll(PDO::FETCH_OBJ));

//fetchObject - retorna a próxima linha como objeto
//alternativa a fetch com PDO::FETCH_OBJ ou PDO::FETCH_CLASS
$stmt->execute();
while($row = $stmt->fetchObject()) {
    my_var_dump($row);
}

