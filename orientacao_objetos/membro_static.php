<div class="titulo">Membros Estaticos</div>

<?php

class A{
      
    public $naoStatico = "membro não estatico";
    //static define o elemento como da clase e o mesmo não estara disponivel nos objetos
    public static $static ="Membro Static";


    public function MostraA(){

        echo"Membro Estatico ={$this->naoStatico}<br>";
        //para acessar os mebros estaticos deve ser ultilizado o self::
        echo"Membro Estatico: ".self::$static."<br>";

    }

    public static function mostraStatic(){
        //funções estaticas so podem invocar variáveis estaticas.
        //echo"Membro Estatico ={$this->naoStatico}<br>";
        echo"Membro Estatico: ".self::$static."<br>";
    }

}

$objetoA = new A();

$objetoA ->MostraA();
//A chamada de metodos estaticos é feito com o nome da classe seguinda de ::
A::mostraStatic();

?>