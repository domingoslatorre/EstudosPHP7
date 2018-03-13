<?php

class Filme {

    private $titulo;
    private $tituloOriginal;
    private $duracao;

    public function __construct($titulo, $tituloOriginal, $duracao)
    {
        $this->titulo = $titulo;
        $this->tituloOriginal = $tituloOriginal;
        $this->duracao = $duracao;
    }

    public function __get($name)
    {
        if($name == 'titulo')
            return strtoupper($this->titulo);
        if($name == 'tituloOriginal')
            return $this->tituloOriginal;    
        if($name == 'duracao')
            return $this->duracao;
    }

    public function __set($name, $value)
    {
        if($name == 'titulo')
            $this->titulo = $value;
        if($name == 'tituloOriginal')
            $this->tituloOriginal = $value;   
        if($name == 'duracao')
            $this->duracao = $value;
    }


}