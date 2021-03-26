<div class="titulo">Classe Abstrata</div>

<?php

abstract class exA{

    public abstract function exibeNome();

}

abstract class exB extends exA{
    public function exibeNome(){
        echo"Abilio ";
    }
    public abstract function ExibeSobrenome(); 
}

class Pessoa extends exB{

     public function exibeNome(){
           parent::exibeNome();
     }
   
     public  function ExibeSobrenome(){
         echo"Neto";
     }

}



$pessoa = new Pessoa();

$pessoa->exibeNome();
$pessoa->ExibeSobrenome();


?>