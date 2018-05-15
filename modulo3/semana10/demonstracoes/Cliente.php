<?php

require_once 'Telefone.php';

class Cliente {

    private $id;
    private $nome;
    private $email;
    private $saldo;
    private $ativo;
    private $dataCadastro;
    private $telefones;

    public function __construct(string $nome, string $email, float $saldo) {
        $this->nome = $nome;
        $this->email = $email;
        $this->saldo = $saldo;
        $this->ativo = TRUE;
        $this->dataCadastro = new DateTime();
        $this->telefones = [];
    }

    public function getId() : string { return $this->id; }
    public function setId(int $id) : void { $this->id = $id; }
    public function getNome() : string { return $this->nome; }
    public function setNome(string $id) : void { $this->nome = $nome; }
    public function getEmail() : string { return $this->email; }
    public function setEmail(string $email) : void { $this->email = $email; }
    public function getSaldo() : float { return $this->saldo; }
    public function setSaldo(float $saldo) : void { $this->saldo = $saldo; }
    public function getAtivo() : bool { return $this->ativo; }
    public function setAtivo(bool $ativo) : void { $this->ativo = $ativo; }
    public function getDataCadastro() : DateTime { return $this->dataCadastro; }
    public function setDataCadastro(DateTime $dataCadastro) : void { $this->dataCadastro = $dataCadastro; }
    public function getTelefones() : array { return $this->telefones; }
    public function addTelefone(string $ddd, string $numero) {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

}