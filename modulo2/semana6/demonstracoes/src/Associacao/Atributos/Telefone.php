<?php

namespace Associacao\Atributos;

class Telefone 
{
    private $ddd;
    private $numero;
    private $aluno;

    public function __construct(string $ddd, string $numero, Aluno $aluno)
    {   
        $this->ddd = $ddd;
        $this->numero = $numero;
        $this->aluno = $aluno;
    }

    public function setDdd(string $ddd)
    {
        $this->ddd = $ddd;
    }

    public function getDdd() : string
    {
        return $this->ddd;
    }

    public function setNumero(string $numero)
    {
        $this->numero = $numero;
    }

    public function getNumero() : string
    {
        return $this->numero;
    }

}