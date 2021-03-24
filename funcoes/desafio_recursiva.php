<div class="titulo">Recursividade</div>

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];


function imprimiArray($array,$simbolo='<'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimiArray($elemento,$simbolo.$simbolo[0]);
        }else{
            echo "$simbolo $elemento<br>";
        }
    }
}

imprimiArray($array);


?>



