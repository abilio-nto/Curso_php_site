<div class="titulo">Array Mapas</div>

<?php

$lista = array(
       "idade"=>27,
       "cor" => "verde",
       "peso"=> 96

);

var_dump($lista);
echo "<br>";
print_r($lista);
$lista["idade"] = 24;
echo "<br>";
print_r($lista);
$lista["comida"] = "pao";
echo "<br>";
print_r($lista);
?>