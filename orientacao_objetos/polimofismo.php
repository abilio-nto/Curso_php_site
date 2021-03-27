<div class="titulo">Polimofismo</div>

<?php

abstract class Comida{
    public $peso;
}

class Arroz extends Comida{
 
}


class Pessoa extends Comida{

     public $pessoaPeso;

     public function __construct($peso){
             $this->pessoaPeso = $peso;       
     }
  

     public function comer(Comida $comida){
         $this->pessoaPeso += $comida->peso;
         return $this->pessoaPeso;
     }

}

$c1 = new Arroz();
$c1->peso=0.25;

$p1 = new Pessoa(90);

echo $p1 -> comer($c1);




?>