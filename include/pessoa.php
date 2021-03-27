<?php
echo"Carregando pessoa";
class Pessoa{

   public $login;
   public $senha;

  function __construct($login,$senha){
    
    $this->login = $login;
    $this->senha = $senha;

   }
    


}




?>