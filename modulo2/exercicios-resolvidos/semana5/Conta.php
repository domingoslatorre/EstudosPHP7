<?php

class Conta 
{
    private $numero;
    private $saldo;

    public function __construct(int $numero)
    {
        $this->numero = $numero;
        $this->saldo = 0.0;
    }

    public function consultarSaldo() : float 
    {
        return $this->saldo;
    }

    //TODO: Refatorar para lançar Exceções (http://php.net/language.exceptions)
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

    //Será refatorado para lançar Exceções (Não retornando bool)
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