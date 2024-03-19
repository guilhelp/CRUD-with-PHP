<?php
namespace App\Model;

class Cliente{
    private int $cliente_id;
    private String $nome;
    private String $email;
    private String $cidade;
    private String $estado;

    public function __construct() {
        $this->cliente_id = 0;
    }
    public function getCliente_id(): int
    {
        return $this->cliente_id;
    }
    public function setCliente_id(int $cliente_id): self
    {
        $this->cliente_id = $cliente_id;

        return $this;
    }
    public function getNome(): String
    {
        return $this->nome;
    }
    public function setNome(String $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    public function getEmail(): String
    {
        return $this->email;
    }
    public function setEmail(String $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getCidade(): String
    {
        return $this->cidade;
    }
    public function setCidade(String $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }
    public function getEstado(): String
    {
        return $this->estado;
    }
    public function setEstado(String $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}