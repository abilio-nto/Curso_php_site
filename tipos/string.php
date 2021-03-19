<div class="titulo">Tipo String</div>

<?php

echo "sou String" , "<br>";
echo var_dump("Eu também");
echo "<br>";


//concatenação

echo "Aqui" . "Junta" , "<br>";
echo "<br>", "tambem aceito ", "virgulas";


echo "<br>";

echo "' teste '" , '" teste "', '\' teste \'', "\" teste \"";

print("<br> tambem existe print");
print "<br> Aceita sem parentese";

echo "<br>";

// funcções

echo "<br>". strtoupper("maiuscula.");
echo "<br>". strtolower("minuscula.");
echo "<br>". ucfirst("Só a primeira letra");
echo "<br>". ucwords("Todas as palavras");
echo "<br>". strlen("Quantas letras?");
echo "<br>". mb_strlen("Eu também", "UTF-8");
echo "<br>". substr("So uma parte mesmo", 7,6);
echo "<br>". str_replace("isso","aquilo", "troque isso");



?>