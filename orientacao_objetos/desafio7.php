<div class="titulo">Desafio erros</div>

<?php

interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    public  function metodo3(){

    }
}
class Classe extends ClasseAbstrata{
    function __construct($parametro){

    }

    public function metodo1(){

    }
    public function metodo2($parametro){

    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();

?>