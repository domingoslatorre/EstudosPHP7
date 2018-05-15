<?php

namespace ClasseAbstrata;

abstract class Conta 
{
    protected $numero;
    protected $saldo;
    const TARIFA_BASE = 20.00;

    public function __construct(int $numero)
    {
        $this->numero = $numero;
        $this->saldo = 0.0;
    }

    abstract protected function calcularTarifa() : float;

    public function consultarSaldo() : float 
    {
        return $this->saldo;
    }

    public function sacar(float $valor) : bool
    {
        if($this->valorValido($valor) && $this->saldo >= $valor) 
        {
            $this->saldo -= $valor;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function depositar(float $valor) : bool
    {
        if($this->valorValido($valor)) 
        {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    private function valorValido($valor) : bool
    {
        if($valor <= 0)
            return false;
        return true;
    }

}