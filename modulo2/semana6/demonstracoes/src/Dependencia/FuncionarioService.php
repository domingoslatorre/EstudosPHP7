<?php

namespace Dependencia;

class FuncionarioService 
{
    public function cadastrar(Funcionario $funcionario)
    {
        if(ValidadorCPF::validar($funcionario->getCpf()))
        {
            
        }

        //2. ...
        //3. ...
    }
}