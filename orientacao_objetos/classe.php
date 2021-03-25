<div class="titulo">Classe</div>

<?php

class Cliente{

    public $nome = 'abilio';
    public $idade = 27;

    public function apresentar(){
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}


$c1 = new Cliente();
$c1->nome='Neto';
$c1->idade=20;


echo $c1->apresentar();



?>