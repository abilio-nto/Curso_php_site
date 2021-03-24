<div class="titulo">Funções</div>


<?php

$variavel = 1;

function trocaValor(){
    $variavel=2;
  echo "Novo valor $variavel <br>"; 
}

echo"Valor inicial $variavel<br>";
trocaValor();
echo"Valor final $variavel <br>";


function trocaDeVerdade(){
    global $variavel;
    $variavel = 3;
}

echo"Valor inicial $variavel<br>";
trocaDeVerdade();
echo"Valor final $variavel<br>";


?>