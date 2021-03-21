<div class="titulo">DOperações arrays</div>

<?php

  $dados1 = [
      "nome" => "joao",
      "idade"=> 27
  ];

   $dados2 = [
       "naturalidade" => "paraiba"
   ];
 
   $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);
   echo"<br>";
   echo "<br>". is_array($dadosCompletos);
   echo "<br>". count($dadosCompletos);
   echo"<br>";
   $indice = array_rand($dadosCompletos);
   echo"<br>";
   
   echo "$indice = $dadosCompletos[$indice]";
   echo"<br>";
   echo "${dadosCompletos['idade']}";
   echo"<br>";
   unset($dadosCompletos['idade']);
   print_r($dadosCompletos);
   echo"<br>";
   unset($dadosCompletos);
   print_r($dadosCompletos);

   $pares = [2,4,6,8];
   $impares =[1,3,5,7,9];

   $decimais = array_merge($pares,$impares);
   print_r($decimais);
   echo"<br>";
   sort($decimais);
   print_r($decimais);

?>