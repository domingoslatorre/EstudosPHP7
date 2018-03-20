<?php

namespace Dependencia;

class Cliente 
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }
}