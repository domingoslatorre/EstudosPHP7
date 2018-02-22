<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 2 / Exercício 10
* --------------------------------------------------------------------------
* Utilizando a estrutura for e foreach imprima duas vezes todos as chaves e
* elementos do seguinte array.
* $alunos = array('João', 'Maria', 'Pedro', "Joana");
* Formato:
* 0, João
* 1, Maria
* 2, Pedro
* 3, Joana
* --------------------------------------------------------------------------
*/

$alunos = array('João', 'Maria', 'Pedro', "Joana");

for ($i=0, $tamanho = count($alunos); $i < $tamanho ; $i++) {
  echo "$i, $alunos[$i] </br>";
}

foreach ($alunos as $chave => $aluno) {
    echo "$chave, $aluno </br>";
}
