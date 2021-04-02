<div class="titulo">Erro</div>

<?php
require_once('desafio_error.php');
use
function \Aritimetica\intdiv;

try{
    echo intdiv(8,2)."<br>";
}catch(\Aritimetica\NaoInteiroException $e){
    echo "Resultado não é uim número inteiro";
}

try{
    echo intdiv(9,3)."<br>";
}catch(DivisionByZeroError $ex){
    echo"Não pode ser divisivel por zero";
}

?>