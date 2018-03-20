<?php

namespace Associacao\Agregacao;

//Opcional, pois telefone está no mesmo namespace que Aluno
use Associacao\Agregacao\Telefone;

class Aluno 
{
    private $nome;
    private $telefone;

    public function __construct(string $nome, Telefone $telefone)
    {   
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setTelefone(Telefone $telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone() : string
    {
        return $this->telefone;
    }

}