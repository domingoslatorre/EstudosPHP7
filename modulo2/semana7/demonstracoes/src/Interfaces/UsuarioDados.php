<?php

namespace Interfaces;

interface UsuarioDados
{
    public function cadastrar(Usuario $usuario) : Usuario;
    public function obterPorEmail(string $email) : ?Usuario;
}
