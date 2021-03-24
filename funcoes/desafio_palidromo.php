<div class="titulo">Funções</div>


<?php

$palavre = "abilio";

// echo strrev($palavre);


function palidromoComFor($palavra){
    $palidromo = '';
    for($i=0;$i<=strlen($palavra);$i++){
         
        $palidromo .= $palavra[strlen($palavra)-$i];
        
        // if($palavra[$i] === $palavra[strlen($palavra)-$i]){
        //     $cont++;
        // }
    }
    if($palidromo === $palavra){
        return "palidromo<br>";
    }else{
        return "Não é palidromo<br>";
    }
}

 function paralidromoMetodo($palavra){
     if($palavra === strrev($palavra)){
        return "palidromo<br>";
     }else{
        return "Não é palidromo<br>";
     }
 }
echo palidromoComFor($palavre);
echo paralidromoMetodo($palavre);

?>
