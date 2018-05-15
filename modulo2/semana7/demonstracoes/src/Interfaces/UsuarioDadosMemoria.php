<?php

namespace Interfaces;

class UsuarioDadosMemoria implements UsuarioDados
{

    private $usuarios;

    public function __construct()
    {
        $this->usuarios = [];
    }
    
    public function cadastrar(Usuario $usuario) : Usuario
    {
        $this->usuarios[] = $usuario;
        return $usuario;
    }

    public function obterPorEmail(string $email) : ?Usuario
    {
        foreach ($this->usuarios as $usuario) {
            if($usuario->getEmail() == $email)
                return $usuario;
        }
        return null;
    }

}
