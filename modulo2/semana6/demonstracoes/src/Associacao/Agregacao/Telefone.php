<?php

namespace Associacao\Agregacao;

class Telefone 
{
    private $ddd;
    private $numero;

    public function __construct(string $ddd, string $numero)
    {   
        $this->ddd = $ddd;
        $this->numero = $numero;
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