<?php

require_once('pessoa.php');
echo"Carregando usuario";
class Usuario extends Pessoa{

     function __construct($login,$senha){
            parent::__construct($login,$senha);

     }
  public function login($login, $senha){
    echo"Cheguei aqui";
    if($this->login==$login && $this->senha==$senha){
        echo"usuario logado";
    }

  }
 
}


?>