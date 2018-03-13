<?php

class Aluno 
{
    const URL = "alunos/";
    protected $prontuario;
    protected $nome;

    public function __construct(string $prontuario = null, string $nome = null)
    {
        $this->prontuario = $prontuario;
        $this->nome = $nome;
    }

    public function setProntuario(string $prontuario)
    {
        $this->prontuario = $prontuario;
    }

    public function getProntuario() : string
    {
        return $this->prontuario;
    }

    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getURL() : string
    {
        return self::URL . $this->prontuario;
    }

    public function __toString()
    {
        return "$this->prontuario, $this->nome"; 
    }

}