<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 3
* --------------------------------------------------------------------------
* Crie uma página HTML com as seguintes características: title "Lista de Compras",
* h1 com o mesmo texto, um parágrafo com o texto: "Não se esqueça de comprar:", e
* uma lista não ordenada (ul>li) que deverá ser montada utilizando o array $lista.
* Utilize as variáveis $titulo e $paragrafo para
* armazenar os textos. Utilize scripts PHP embutidos para imprimir os
* conteúdos das variáveis no código HTML. Utilize foreach ou for para montar
* apresentar os itens da lista
* --------------------------------------------------------------------------
*/

$titulo = "Lista de Compras";
$paragrafo = "Não se esqueça de comprar:";
$lista = array('1 Kg Arroz', '1 Kg Feijão', '2 Kg Açucar', '2 L Óleo', '3 Kg Farinha');

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $titulo; ?></title>
</head>
	<body>
    	<h1><?php echo $titulo; ?></h1>
      <p><?php echo $paragrafo; ?></p>

      <ul>
        <?php foreach ($lista as $item) { ?>
          <li><?php echo $item; ?></li>
        <?php } ?>
      </ul>

      <ul>
        <?php foreach ($lista as $item): ?>
          <li><?php echo $item; ?></li>
        <?php endforeach ?>
      </ul>

      <ul>
        <?php
        foreach ($lista as $item) {
          echo "<li>$item</li>";
        }
        ?>
      </ul>
	</body>
</html>
