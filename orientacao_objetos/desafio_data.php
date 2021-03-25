<div class="titulo">Classe</div>

<?php

class Data{

 public $dia = 01;
 public $mes = 01;
 public $ano = 1970;

  public function exibiData(){
      return "{$this->dia}/{$this->mes}/{$this->ano}";
  }

}


$data = new Data();
$data2 = new Data();

$data->dia = 24;
$data->mes = 03;
$data->ano = 2021;

echo $data->exibiData()."<br>";
echo $data2->exibiData();




?>