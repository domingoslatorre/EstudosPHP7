<?php

class Produto
{
    public static $contador = 1;
    public $id;
    public $nome;

    public function __construct(string $nome)
    {
        $this->id = self::$contador;
        $this->nome = $nome;
        self::$contador++;
    }

    public function __toString()
    {
        return "$this->id, $this->nome";    
    }
    
}