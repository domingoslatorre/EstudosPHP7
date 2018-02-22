<?php

class Aluno 
{
    private $nome;
    private $email;
    
    public function __construct($nome, $email) 
    {
        $this->nome = $nome;
        $this->email = $email;
    }
    
    public function mostrarDados()
    {
        return $this->nome . ', ' . $this->email . '</br>';
    }
}

$aluno1 = new Aluno('João', 'joao@email.com');
$aluno2 = new Aluno('Maria', 'maria@email.com');

echo $aluno1->mostrarDados();
echo $aluno2->mostrarDados();

