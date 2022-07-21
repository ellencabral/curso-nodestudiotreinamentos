<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, afim de reaproveitar 
códigos ou comportamentos generalizados */

class Personagem {
    public $nome;
    public $vida;

    public function Atacar() {
        echo "Atacou";
    }
}

class Humano extends Personagem {

    public function Comer(){
        echo "Comeu";
    }
}

class Gem extends Personagem {

    public function invocarArma(){
        echo "Invocou arma";
    }
}

$humano = new Humano();
$humano->nome = "Connie";
$humano->vida = 100;

var_dump($humano);
$humano->Comer();

$gem = new Gem();
$gem->nome = "Garnet";
$gem->vida = 200;

var_dump($gem);
$gem->invocarArma();

