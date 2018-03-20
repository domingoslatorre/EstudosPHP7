<?php

namespace Associacao\Reflexiva;

class ComponenteCurricular
{
    private $nome;
    private $conteudo;
    private $preRequisito;

    public function __construct(string $nome, string $conteudo, 
        ComponenteCurricular $preRequisito = null
    )
    {
        $this->nome = $nome;
        $this->conteudo = $conteudo;
        $this->preRequisito = $preRequisito;
    }

    public function getPreRequisitos()
    {
        return $this->preRequisito;
    }

}