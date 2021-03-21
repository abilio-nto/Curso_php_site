<div class="titulo">Desafio Sorteio</div>

<?php

$nomes =["elsa","branca de neve", "rapunzel", "bela"];

$sorteio = array_rand($nomes);

echo "<h1><center>$nomes[$sorteio]<center><h1>";


?>