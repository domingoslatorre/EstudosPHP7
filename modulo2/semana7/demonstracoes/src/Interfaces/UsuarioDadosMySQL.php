<?php

namespace Interfaces;

class UsuarioDadosMySQL implements UsuarioDados
{
    
    public function cadastrar(Usuario $usuario) : Usuario
    {
        // Abrir Conexao ...

        // SQL 'INSERT INTO usuarios ...."

        // Executar SQL

    }

    public function obterPorEmail(string $email) : Usuario
    {
        // Abrir Conexao ...

        // QUERY 'SELECT * FROM usuarios WHERE ..."
        
        // Executar SQL
    }

    // ...
}
