<div class="titulo">Operações Aritimeticas</div>

<?php

echo 1+1,"<br>";
echo var_dump(1+1),"<br>";
echo 1+2.5,"<br>";
echo 10-2,"<br>";
echo 2*5,"<br>";
echo 18/4,"<br>";
echo intdiv(7,4),"<br>";
echo round(7/4),"<br>";
echo 7%4,"<br>";
echo 8%2,"<br>";
echo 7/0,"<br>";
echo 4 ** 2,"<br>";

//Precedência de operadores:
//()=>**=>/ * % => + -
echo '<p>Precedência</p>';
echo 2+3*4,"<br>";
echo (2+3) * 4 , "<br>";
echo 2+ 3 * 4 ** 2 ,"<br>";
echo ((2+3)*4**2);
?>