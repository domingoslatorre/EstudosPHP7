<?php

namespace Dependencia;

class ClienteService 
{
    public function cadastrar(Cliente $cliente)
    {
        if(ValidadorCPF::validar($cliente->getCpf()))
        {
            
        }

        //2. ...
        //3. ...
    }
}