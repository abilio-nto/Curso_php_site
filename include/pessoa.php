<?php
echo"Carregando pessoa<br>";
class Pessoa{

   public $login;
   public $senha;

  function __construct($login,$senha){
    
    $this->login = $login;
    $this->senha = $senha;

   }

   public function resetSenha($novaSenha){
      $this->senha = $novaSenha;
   }
    


}




?>