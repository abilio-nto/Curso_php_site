<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br>Número $numero";

$texto = "sua nota é: $numero ";
echo $texto;

$objeto = 'caneta';

echo "<br> Eu tenho 5 $objeto";
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s";// evitar dar espaços na chaves
echo "<br>";
//echo "{$numero + 1}"; nao executa




?>