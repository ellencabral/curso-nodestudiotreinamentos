<?php

class Personagem {
    public $nome;
    public $vida;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        $this->vida = $vida;
    }

    public function Atacar() {
        $this->vida -= 10;
        echo $this->nome . " atacou e ficou com " . $this->vida . " pontos de vida";
    }
}

$steve = new Personagem();
$steve->setNome("Steve");
$steve->setVida(100);

$steve->Atacar();