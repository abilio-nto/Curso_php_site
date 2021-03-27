<div class="titulo">Metodos Mágicos</div>


<?php

class Pessoa{
    public $nome = 'abilio';
    public $idade = 27;
    
    function __construct($nome,$idade){
          $this->nome=$nome;
          $this->idade=$idade;
    }
   
    
    public function __toString(){
        return "Convertendo tudo para String {$this->nome}, {$this->idade}";
    }
    
    public function apresentar(){
        echo $this."<br>";
    }

    public function __get($attr){
        echo"Atributo não definido:{$attr}";
    }

    public function __set($nome, $valor){
        echo "Tentando modificar ateibuto nao definido{$nome}{$valor}";
    }
}


$pessoa = new Pessoa('neto', 30);
$pessoa->apresentar();

$pessoa->$idadepessoa;

?>