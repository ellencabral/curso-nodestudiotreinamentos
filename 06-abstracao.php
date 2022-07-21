<?php

abstract class Personagem { /*serve de modelo para as outras classes e NÃO pode ser instanciada */
    protected $nome;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    abstract protected function Atacar();
}

class Gem extends Personagem {
    
    public function Atacar() {
        echo $this->nome . " atacou";
    }
}

$gem = new Gem();
$gem->setNome("Garnet");
$gem->Atacar();