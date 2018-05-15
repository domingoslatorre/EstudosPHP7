<?php

namespace Heranca;

class Venda
{
    private $total;

    public function __construct(float $total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }
}