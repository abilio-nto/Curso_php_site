<div class="titulo">Laço for</div>

<?php

$impre='';
for($i=0;$i<=10;$i++){
   $impre .= "#";
   echo"$impre<br>";
}

echo"<hr>";
echo"Execução com 2 for";
for($i=0;$i<=10;$i++){
    for($j=0;$j<=$i;$j++){
        echo"#";
    }
    echo"<br>";
}

echo"<hr>";
for($impressao = '#';$impressao!=='##########';$impressao.='#'){
    echo"$impressao<br>";
}
?>