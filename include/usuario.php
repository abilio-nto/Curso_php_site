

<?php

require_once('pessoa.php');
echo"Carregando usuario<br>";
class Usuario extends Pessoa{

     function __construct($login,$senha){
            parent::__construct($login,$senha);

     }
  public function login($login, $senha){
  
    if($this->login==$login && $this->senha==$senha){
        echo"construtor login:{$this->login}, construtor senha{$this->senha} - Parametro func:{$login} senha:{$senha}<br>";
        echo"usuario logado<br>";
    }else{
      echo"construtor login:{$this->login}, construtor senha{$this->senha} - Parametro func:{$login} senha:{$senha}<br>";
      echo"usuario ou senha errado";
    }

  }
 
}


?>