<?php

//Strings no PHP

//Aspas Simples
$s1 = 'isso é uma string </br>';
$s2 = 'isso é uma string\n quebra de linha </br>';
echo $s1;
echo $s2; 

//Aspas Duplas 
$s3 = "isso é uma string\n quebra de linha </br>";
$s4 = "isso \t é uma string \t quebra \n de linha  </br>";
$nome = 'João';
$s5 = "Parabéns $nome!";

echo $s3;
echo $s4;
echo $s5;

//Sintaxe heredoc (Here Document)
//Forma de definir grandes blocos de texto sem precisar escapar
//aspas duplas/simples, quebras de linha, tabulações, etc
//Três sinais de menor, delimitador e quebra de linha ---- fechamento com delimitador
//Textos heredoc se comportam como strings delimitadas por aspas duplas
//Variáveis são expandidas
//Funciona caracteres de escape \t \n

$s6 = <<<LABEL
Teste primeira \t\t linha \n quebra?
    Teste 'segunda linha com tabulação
teste t    e   s   t      "  '  "e"
teste $nome
LABEL;

echo $s6;
echo '<br>';

//Sintaxe nowdoc
$s7 = <<<'LABEL2'
Teste primeira \t\t linha \n quebra?
    Teste 'segunda linha com tabulação
teste t    e   s   t      "  '  "e"
teste $nome 
LABEL2;

echo $s7;



//Interpretação de Variáveis


