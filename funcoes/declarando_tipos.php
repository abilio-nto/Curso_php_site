<div class="titulo">Declarando tipos</div>


<?php

//definindo o tipo direto nos paramentros. OU seja, os argumerntos seram convertidos em parametros do tipo int

function soma(int $a, int $b){
    echo"<span>Soma de $a + $b = </span>";
    return $a+$b;
}

// echo soma(2,5)."<br>";
// echo soma(2.3,5.7)."<br>";
echo soma(2,'5um')."<br>";

// convertento a saida da operação. Não importa o tipo de dado recebido por paramentro, ele sera retornado com inteiro.

function soma2($a,$b):int{
    echo"<span>Soma de $a + $b = </span>";
    return $a+$b;
}

echo soma(2,5)."<br>";
// echo soma(2.3,5.7)."<br>";
// echo soma(2,'5um')."<br>";

?>