<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 6 / Exercício 1
* --------------------------------------------------------------------------
* 1. Implemente em PHP as classes do diagrama presente no slide 137 com os 
* seguintes métodos para cada classe:
* - Filme: 
*     . inserirPapel(string $nome, Ator $ator): Deve inserir um papel no
*       atributo $elenco 
*     . definirSessao(DateTime inicio, DateTime fim, bool legendado): Deve 
*       inserir uma sessão no atributo $sessoes. Verificar se já existe uma
*       sessao naquele horário
*     . listarSessoes(): deve listar todas as sessões do filme. Implementa 
*       método __toString na class Sessao
* 2. Refatorar o modelo inserindo a classe Sala com as propriedades nome e
* capacidade. Uma sala deve estar relacionada a classe Sessão.
* 3. Testar o modelo criando objetos.
*--------------------------------------------------------------------------
*/


//Exemplos de Testes
//Fonte: http://www.imdb.com/title/tt0068646/ e http://www.imdb.com/title/tt0086250/

$a1 = new Ator('Marlon Brando', '...');
$a2 = new Ator('Al Pacino', '...');

$f1 = new Filme(1, 'O Poderoso Chefão', 'The Godfather', 175);
$f1->inserirPapel('Don Vito Corleone', $a1);
$f1->inserirPapel('Michael Corleone', $a2);

$f2 = new Filme(1, 'Scarface', 'Scarface', 170);
$f2->inserirPapel('Tony Montana', $a2);

