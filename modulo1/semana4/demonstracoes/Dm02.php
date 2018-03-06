<?php

//Interpretação de Variáveis

//Sintaxe Simples
$nome = 'João';
$fruta = "Maçã";
$sucos = ["Limão", "Laranja", "Morango"];
$nomes = ['a' => 'João', 'b' => 'Maria'];
class Aluno {
    public $nome;
    public $telefone;
}
$aluno = new Aluno();
$aluno->nome = "Pedro";
$aluno->telefone = "(11) 1111-1111";

$msg1 = "Boa noite $nome";
$msg2 = "$nome comprou uma $fruta";
$msg3 = "$nome comprou três {$fruta}s";
$msg4 = "Sucos: $sucos[0], $sucos[1], $sucos[2]";
$msg5 = "Boa noite {$nomes['b']}";
$msg6 = "Aluno: $aluno->nome, Telefone: $aluno->telefone";

echo "$msg1 </br>";
echo "$msg2 </br>";
echo "$msg3 </br>";
echo "$msg4 </br>";
echo "$msg5 </br>";
echo "$msg6 </br>";