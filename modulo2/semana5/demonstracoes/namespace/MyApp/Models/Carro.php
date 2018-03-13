<?php

namespace MyApp\Models;

use MyApp\Models\Montadora;

class Carro
{

    public $montadora;

    function __construct(Montadora $montadora)
    {
        echo 'Classe Carro Encontrada <br>';
    }
}