<?php

namespace ClasseAbstrata;

class ContaPoupanca extends Conta
{
    private $rendimentos;
    
    public function __construct(int $numero)
    {
        parent::__construct($numero);
        $this->calcularRendimentos();
    }

    public function calcularTarifa() : float
    {
        return self::TARIFA_BASE * 0.0;
    }

    public function calcularRendimentos()
    {
        // ... 
    }

    

}