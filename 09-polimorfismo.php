<?php 

class Gem {
    public function Atacar() {
        echo "Gem atacou";
    }

    public function Fundir() {
        echo "Gem fundiu";
    }
}

class Garnet extends Gem {
    
    public function Atacar() {
        $this->Fundir();
    }
}

$gem = new Garnet();
$gem->Atacar();