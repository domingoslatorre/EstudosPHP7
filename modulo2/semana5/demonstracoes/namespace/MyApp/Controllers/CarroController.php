<?php

namespace MyApp\Controllers;

use MyApp\Models\Carro;
use MyApp\Models\Montadora;

class CarroController
{
    function __construct()
    {
        echo 'Classe CarroController Encontrada <br>';
        
        $montadora = new Montadora();
        $carro = new Carro($montadora);
    }
}