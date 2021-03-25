<div class="titulo">Construtor e Destrutor</div>


<?php

class Pessoa{

public $nome;
public $idade;

function __construct($novoNome, $idade){
      echo " Construtor invocado<br>";
      $this->nome = $novoNome;
      $this->idade = $idade;
}

 function __destruct(){
     echo "E morreu!!!<br>";
 }

public function apresentar(){
    echo"{$this->nome} - {$this->idade} Anos.<br>";
}
}


$pessoaA = new Pessoa("abilio", 27);
$pessoaA->apresentar();
unset($pessoaA);
$pessoaB = new Pessoa("abilio", 27);
$pessoaB->apresentar();
$pessoaB = null;

?>