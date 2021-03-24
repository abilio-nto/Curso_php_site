<div class="titulo">Retornando funções</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo "<br>".soma(3)(3);
$somaDois = soma(3);
echo "<br>".$somaDois(3);
?>