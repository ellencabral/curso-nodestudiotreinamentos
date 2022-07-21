<?php

class Personagem {
    public static $nome;

    public static function Atacar() {
        echo self::$nome . " atacou";
    }
}

Personagem::$nome = "Steven";
Personagem::Atacar();