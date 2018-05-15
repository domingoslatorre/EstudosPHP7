<?php

namespace Interfaces;

class Usuario 
{
    private $email;
    private $senha;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = md5($senha);
    }

    public function getEmail()
    {
        return $this->email;
    }
}