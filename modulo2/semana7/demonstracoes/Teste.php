<?php

class Avo {
    protected $sobrenome;
    
    public function __construct($sobrenome) {
        $this->sobrenome = $sobrenome;
        echo "Avó $this->sobrenome <br>";
    }
}

class Pai extends Avo {

    public function __construct($sobrenome) {
        parent::__construct($sobrenome);
        echo "Pai $this->sobrenome <br>";
    }
}

class Filho extends Pai {

    public function __construct($sobrenome) {
        parent::__construct($sobrenome);
        echo "Filho $this->sobrenome <br>";
    }
}

$pai = new Filho("Oliveira");