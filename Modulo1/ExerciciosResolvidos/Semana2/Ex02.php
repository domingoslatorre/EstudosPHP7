<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 2
* --------------------------------------------------------------------------
* Crie uma página HTML com as seguintes características: title "Página do
* Exercício 2", h1 com o mesmo texto e um parágrafo com o texto: "Esta é a
* página do Exercício 2". Utilize as variáveis $titulo e $paragrafo para
* armazenar os textos. Utilize scripts PHP embutidos para imprimir os
* conteúdos das variáveis no código HTML.
* --------------------------------------------------------------------------
*/

$titulo = "Página do Exercício 2";
$paragrafo = "Esta é a página do Exercício 2";

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $titulo; ?></title>
</head>
	<body>
    	<h1><?php echo $titulo; ?></h1>
      <p><?php echo $paragrafo; ?></p>
	</body>
</html>
