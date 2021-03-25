<div class="titulo">herança</div>

<?php


class Pessoa{

   public $nome;
   public $idade;

   function __construct($nome,$idade){
       
        $this->nome=$nome;
        $this->idade=$idade;
   
   }

   function __destruct(){
    echo "Pessoas dando tchau <br>";
   }


   public function apresentar(){
       echo " Nome: {$this->nome} , Idade: {$this->idade} <br>";
   }


}

class Usuario extends Pessoa{ 
     
    public $login;

    function __construct($nome,$idade,$login){
        parent::__construct($nome,$idade);
        $this->login=$login;
    }

    function __destruct(){
        parent::__destruct();
        echo"usuario dando tchau!!<br>";
    }


    public function apresentar(){
        echo "login: @{$this->login}, ";
        parent::apresentar();
    }
     
}

$usuario = new Usuario("abilio",27,"abilio_neto");

$usuario -> apresentar();
unset($usuario);


?>