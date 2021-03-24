<div class="titulo">Funções</div>


<?php

function imprimirMensagem(){
    return "Eu sou uma função<br>";
}

echo imprimirMensagem();

function obtermensagemComNome($nome){
   
    return "Meu nome é $nome<br>";

}

echo obtermensagemComNome("abilio");


function soma($a, $b){
   
    return $a+$b;
}

echo soma(3,5);

$variavel = 5;

function variavelPosParametro($var,$num){
    return $var + $num;
}

echo "<br>", variavelPosParametro($variavel,10);

function trocandoValor(&$var, $num){
    $var = 10;

    return $var + $num;
}

echo "<br>", trocandoValor($variavel,2);

?>