<?php

require_once 'Aluno.php';

class AlunoVisitante extends Aluno
{
    private $origem;

    public function __construct(string $prontuario, string $nome, string $origem)
    {
        parent::__construct($prontuario, $nome);
        $this->origem = $origem;
    }

}