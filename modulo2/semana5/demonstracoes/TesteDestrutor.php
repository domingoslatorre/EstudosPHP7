<?php

require_once 'Funcoes.php';

class TesteDestrutor
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
        echo "Chamou Construtor do objeto $this->id <br>";
    }

    public function __destruct()
    {
        echo "Chamou Destrutor do objeto $this->id <br><br>";
    }
}

