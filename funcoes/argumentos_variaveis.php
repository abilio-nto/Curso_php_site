<div class="titulo">Funções</div>


<?php

// function soma(...$numero){
//     $soma =0;
//     foreach($numero as $num){
//         $soma+=$num;
//     }

//     return $soma;
// }

// echo "<br>",soma(1,2,3,4,5);


function membros($titular ,...$dependentes){
    echo "Titular = $titular <br>";
    var_dump($dependentes);
    if($dependentes){
      foreach($dependentes as $nomes){
          echo "Dependente = $nomes<br>";
      }
    }
}


membros("abilio","nayane");
?>