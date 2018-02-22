<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 2
* --------------------------------------------------------------------------
* Acesse o arquivo Ex11.php da seguinte maneira:
* localhost:8080/Semana2/Exercicios/Ex11.php?n1=10&n2=2
* verifique que é possível enviar valores para um script php via URL
* --------------------------------------------------------------------------
*/

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Calculadora Simples PHP</title>
</head>
	<body>
      <h1>Passagem de Valores via URL</h1>
    	<h2>Entre com os valores via URL para as variáveis n1 e n2</h2>
      <p>Exemplo: http://localhost:8080/Semana2/Exercicios/Ex11.php?n1=10&n2=2.5</p>
      <p>A variável $n1 possui valor: <?php echo $n1; ?></p>
      <p>A variável $n2 possui valor: <?php echo $n2; ?></p>
      <p>A soma de $n1 + $n2 é: <?php echo $soma; ?></p>
      <p>A $subtração de $n1 - $n2 é: <?php echo $subtracao; ?></p>
      <p>A multiplicação de $n1 * $n2 é: <?php echo $multiplicacao; ?></p>
      <p>A divisão de $n1 / $n2 é: <?php echo $divisao; ?></p>
	</body>
</html>
