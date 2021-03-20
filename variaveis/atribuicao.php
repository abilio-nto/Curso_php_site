<div class="titulo">Atribuição</div>
<?php

$numero = 10;
echo"<br>" . $numero;
$numero = $numer - 3;
echo"<br>" . $numero;
$numero = $numero + 1.5;
echo"<br>" . $numero;
$numero--;
--$numero;
echo"<br>" . $numero;
$numero++;
++$numero;
echo"<br>" . $numero;
$numero = 20;
echo"<br>" . $numero;
$numero -= 5;
echo"<br>" . $numero;

$numero += 5;
echo"<br>" . $numero;
$numero /= 4;
echo"<br>" . $numero;
$numero *= 4;
echo"<br>" . $numero;
$numero **= 2;
echo"<br>" . $numero;
$numero %= 10;
echo"<br>" . $numero;
$numero .= 10;
echo"<br>" . $numero;
$numero = "Esse numero";
echo"<br>" . $numero;
$numero .= " Mais esse";
echo"<br>" . $numero;

//valor default

//$valorInesistente = 'valor';
echo"<br>" . $valorInesistente;
$valor = $valorInesistente ?? "valor default";
echo $valor;
?>