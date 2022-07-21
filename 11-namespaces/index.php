<?php
require 'classes/Personagem.php';
require 'models/Personagem.php';

use classes\Personagem;

$personagem = new Personagem();
$personagem->mostrarPersonagem();

use models\Personagem as characterModel;

$personagem2 = new characterModel();
$personagem2->mostrarPersonagem();