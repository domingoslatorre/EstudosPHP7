<?php

class Telefone {
    private $ddd;
    private $numero;

    public function __construct(string $ddd, string $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDdd() : string {
        return $this->ddd;
    }

    public function getNumero() : string {
        return $this->numero;
    }
}