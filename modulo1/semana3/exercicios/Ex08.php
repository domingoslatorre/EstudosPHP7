<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 3 / Exercício 8
* --------------------------------------------------------------------------
* Crie um novo arquivo HTMLHelper.php com as seguintes funções:
*
*   titulo($tag, $conteudo, $id, $class) -> tag: h1, h2, h3 ...
*   a($url, $conteudo, $target, $id, $class)
*   p($conteudo, $id, $class)
*   ul($itens, $id, $class)
*   ol($itens, $id, $class)
*
* Inclua o arquivo HTMLHelper.php nesse arquivo e teste todas as funções
* --------------------------------------------------------------------------
*/

require 'HTMLHelper.php';

titulo('h1', 'Novas Notícias', 'principal', 'grande');
titulo('h2', 'São Paulo', 'secundario', 'medio');
p('O veículo com placa ...', 'p1', 'principal');
ul(['Banana', 'Laranja', 'Limão'], 'lista1', 'lista-grande');
ul(['Virar a esquerda na ...', 'Virar a direita na ...', 'Permanecer por 1 km ...'], 'direcao1', 'lista-pequena');
