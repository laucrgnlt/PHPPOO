<?php

// Por padrão o nome da página deve ser igual ao da classe

class Pessoa {
    // VARIÁVEIS/CARACTERÍSTICAS
    // public, private ou protected
    protected $nome;
    // public $idade;

    const especie = "Humana";

    public function __construct($tmpNome)
    {   
        $this->nome = $tmpNome;
    }

    // MÉTODO
    // public function falarNome() {
    //     // CHAMAR A VARIÁVEL
    //     echo $this->nome;
    // }
    
    // public function falarIdade() {
    //     echo $this->idade;
    // }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getNome() {
        return $this->nome;
    }
}
