<?php

class Personagem {
    public $nome;

    public function __construct($nome) { /* método mágico construct */
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

$steve = new Personagem("Steve");
echo $steve->nome;