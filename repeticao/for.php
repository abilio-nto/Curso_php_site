<div class="titulo">Laço for</div>

<?php
   
   for($i=1;$i<=10;$i++){
       echo "$i <br>";
   }
   echo "<hr>";
   for(;$i<=15;$i++){
      echo "$i <br>";
   }
   echo "<hr>";
   for(;$i<=20;){
       echo "$i <br>";
       $i++;
    }
    
   echo "<hr>";
   $array = ["domingo","segunda","terça","quarta","quinta","sexta","sábado"];
   
   for($i=0;$i<count($array);$i++){
       echo"{$array[$i]} ";
    }
    
    echo "<hr>";
    
    $vogal =[
        ['a','e','i','o','u'],
        ['b','c','d'],
    ];
        
    for($i=0;$i<count($vogal);$i++){
        for($j=0;$j<count($vogal[$i]);$j++){
            echo"{$vogal[$i][$j]} ";
        }
        echo"<br>";
    }
    


?>