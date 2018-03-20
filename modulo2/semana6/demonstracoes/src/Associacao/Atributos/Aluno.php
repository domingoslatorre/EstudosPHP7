<?php

namespace Associacao\Atributos;

class Aluno 
{
    private $nome;
    private $telefones = [];

    public function __construct(string $nome, string $ddd, string $numero)
    {   
        $this->nome = $nome;
        $this->addTelefone($ddd, $numero);
    }

    public function addTelefone($ddd, $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero, $this);
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setTelefones(Telefone $telefones)
    {
        $this->telefones = $telefones;
    }

    public function getTelefones() : array
    {
        return $this->telefones;
    }

}