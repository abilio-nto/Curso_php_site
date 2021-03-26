<div class="titulo">herança</div>

<?php


class Pessoa{

   public $nome;
   public $idade;

   function __construct($nome,$idade){
        //o this é importante para indicar que queremos modificar os atributos do objeto em uso.
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
        //o parent:: acessa o elemento pai trazendo assim o reuso do código já escrito
        parent::__construct($nome,$idade);
        $this->login=$login;
    }

    function __destruct(){
        parent::__destruct();
        echo"usuario dando tchau!!<br>";
    }

    //as funções podem ser sobreescritas ou podemos acomplementar o que já axiste.
    public function apresentar(){
        echo "login: @{$this->login}, ";
        parent::apresentar();
    }
     
}

$usuario = new Usuario("abilio",27,"abilio_neto");

$usuario -> apresentar();
unset($usuario);


?>