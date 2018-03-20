<?php
/**
* --------------------------------------------------------------------------
* Módulo 1 / Semana 5 / Exercício 2
* --------------------------------------------------------------------------
* Implemente em PHP a classe Produto com os atributos codigo (int),  
* nome (string), descricao (string), valorCompra (float)
* estoqueMinimo (int), estoqueMaximo (int).
* A classe deverá ter os métodos: 
*  - construtor com parâmetros para nome, descrição e valorCompra
*  - definirRegrasEstoque com parâmentros para estoqueMinimo e estoqueMaximo
*  - getValorVenda que deverá retornar o valorCompra vezes uma margem de 
*    lucro de 50% 
* Teste a classe neste arquivo criando 3 objetos. Teste todos os 
* métodos. Utilize var_dump para verificar os objetos.
--------------------------------------------------------------------------
*/

class Produto 
{
    private $codigo;
    private $nome;
    private $descricao;
    private $valorCompra;
    
    //Definição padrão de valores mínimos e máximos de estoque
    private $estoqueMinimo = 5;
    private $estoqueMaximo = 10;

    public function __construct(int $codigo, string $nome,  string $descricao, float $valorCompra)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valorCompra = $valorCompra;
    }

    //TODO: Refatorar para lançar Exceções (http://php.net/language.exceptions)
    public function definirRegrasEstoque(int $estoqueMinimo, int $estoqueMaximo) : bool
    {
        if($estoqueMinimo > $estoqueMaximo)
            return false;
        
        $this->estoqueMinimo = $estoqueMinimo;
        $this->estoqueMaximo = $estoqueMaximo;
        return true;
    }

    public function getValorVenda() : float
    {
        return $this->valorCompra * 1.5;
    }
}