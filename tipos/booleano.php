<div class="titulo">Tipos - booleano</div>

<?php

echo false;
echo "<br>";
echo true;
echo "<br>";

echo "<br>". var_dump(false);
echo "<br>". var_dump("false");
echo "<br>". var_dump(FALSE);
echo "<br>". var_dump(true);
echo "<br>". var_dump("True");

//regras de conversão

echo "<br>Regras:</br>";

echo "<br>". var_dump((bool) 0);// retorna false. Apenas Zero
echo "<br>". var_dump((bool) 20);
echo "<br>". var_dump((bool) -1);
echo "<br>". var_dump((bool) 0.0);
echo "<br>". var_dump((bool) 0000000000.1);
echo "<br>". var_dump((bool) "");// retorna false
echo "<br>". var_dump((bool) "0");// retorna false
echo "<br>". var_dump((bool) " ");
echo "<br>". var_dump((bool) "00");
echo "<br>". var_dump((bool) "false");




?>