<?php

namespace Interfaces;

class UsuarioServicos
{
    private $usuarioDados;

    public function __construct(UsuarioDados $usuarioDados)
    {
        $this->usuarioDados = $usuarioDados;
    }

    public function registrar(string $email, string $senha)
    {
        // Criar objeto Usuario
        $usuario = new Usuario($email, $senha);

        // Verifica/aplica regras de negócio

        // Salvar no banco de dados
        $this->usuarioDados->cadastrar($usuario);
        
        // Notifica interessados
    }

    public function realizarLogin(string $email, string $senha)
    {
        
        // Verificar credenciais no banco de dados

        // Criar Sessão
    }

    // ...
}
