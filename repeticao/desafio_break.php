<div class="titulo">Break continue</div>

<?php
 
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF',
    ];

    for($i=0;$i<count($array);$i++){
        if($i % 2 === 1){
            continue;
        }else{
            echo"{$array[$i]}<br>";
            
        }
    }
    echo"<hr>";
    echo"Com foreach";
    echo"<br>";
    foreach($array as $indice =>$valor){
        if($indice % 2 ===1){
            continue;
        }else{
            echo"{$valor}<br>";
        }
    }


?>