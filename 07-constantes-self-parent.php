<?php

class Personagem {
    const vida = 200;

    public function exibirVida() {
        echo self::vida;
    }
}

class Humano extends Personagem {
    const vida = 100;

    public function exibirVida() {
        echo parent::vida; /* imprime a vida da classe pai */
    }
}

$humano = new Humano();
$humano->exibirVida();