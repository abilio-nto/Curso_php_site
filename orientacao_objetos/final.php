<div class="titulo">Final</div>

<?php

abstract class abstrata{
    public function exibeA(){
        echo"Exibindo A";
    }

    public final function exibeB(){
        echo"Exibindo B";
    }
}

class Classe extends abstrata{

     public function exibeA(){
        parent::exibeA();
     }
     

//    public function exibeB(){
//        echo "Exibindo B"
//    }

}


$c = new Classe();

$c->exibeA();
$c->exibeB();

final class B{
    public function A(){
        echo "Função clase final";
    }
}

?>