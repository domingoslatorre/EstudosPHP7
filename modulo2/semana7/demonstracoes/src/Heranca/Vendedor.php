<?php

namespace Heranca;

class Vendedor
{
    protected $nome;
    protected $porcentagemComissao;
    protected $vendas;

    public function __construct(string $nome, float $porcentagemComissao)
    {
        $this->nome = $nome;
        $this->setComissao($porcentagemComissao);
        $this->vendas = [];
    }

    
    public function setComissao(float $porcentagemComissao) : void
    {
        if($porcentagemComissao > 0 && $porcentagemComissao <= 20)
        $this->porcentagemComissao = $porcentagemComissao;
        else
        $this->porcentagemComissao = 0;
    }
    
    public function addVenda(Venda $venda) : void
    {
        $this->vendas[] = $venda;
    }

    public function calcularComissao() : float
    {
        $salario = 0;

        foreach ($this->vendas as $venda) {
            $salario += $venda->getTotal();
        }

        return $salario * ($this->porcentagemComissao / 100);
    }

    public function calcularSalario() : float
    {
        return $this->calcularComissao();
    }

}