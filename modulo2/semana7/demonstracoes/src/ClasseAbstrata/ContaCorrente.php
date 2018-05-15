<?php

namespace ClasseAbstrata;

class ContaCorrente extends Conta
{
    private $limite;

    public function __construct(int $numero, float $limite)
    {
        parent::__construct($numero);
        $this->limite = $limite;
    }

    public function calcularTarifa() : float
    {
        return self::TARIFA_BASE * 1.5;
    }

}