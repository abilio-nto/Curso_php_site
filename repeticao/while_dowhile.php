<div class="titulo">Break continue</div>

<?php
 
 
 const VALOR_LIMITE = 5;
 $contador =0;

while($contador<VALOR_LIMITE){
    echo"$contador";
    echo"<br>";
    $contador++;
}

echo"<hr>";
$contador =6;

do{
    echo"$contador";
    echo"<br>";
    $contador++;
}while($contador<VALOR_LIMITE);


$contador = 0;

while(true){
    echo"While(true)$contador<br>";
    $contador++;
    if($contador>VALOR_LIMITE)break;
}

?>