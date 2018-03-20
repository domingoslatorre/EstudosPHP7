<?php

namespace Associacao\Composicao;

class Aluno 
{
    private $nome;
    private $telefone;

    public function __construct(string $nome, string $ddd, string $numero)
    {   
        $this->nome = $nome;
        $this->telefone = new Telefone($ddd, $numero);
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