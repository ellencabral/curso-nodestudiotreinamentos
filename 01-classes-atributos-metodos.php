<?php 

class Personagem { /* classe */
    public $nome; /* atributo */

    public function Atacar() { /* método */
        echo $this->nome . " atacou";
    }
}

$steve = new Personagem(); /* instanciando a classe */

$steve->nome = "Steve Universe";
$steve->Atacar();