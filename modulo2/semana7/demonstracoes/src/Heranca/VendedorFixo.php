<?php

namespace Heranca;

class VendedorFixo extends Vendedor
{
    private $salarioFixo;

    public function __construct(string $nome, float $porcentagemComissao, float $salarioFixo)
    {
        parent::__construct($nome, $porcentagemComissao);
        $this->salarioFixo = $salarioFixo;
    }

    public function calcularSalario() : float
    {
        $comissao = $this->calcularComissao();
        return $this->salarioFixo + $comissao;
    }
    
}