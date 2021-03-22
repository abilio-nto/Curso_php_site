<div class="titulo">Break continue</div>

<?php
   $cont = 10;
 for(;;){
     echo"$cont<br>";
     $cont++;
     if($cont>20){
         break;
     }
 }
 echo"<hr>";
 
 for(;;){
     $cont++;
     
     if($cont % 2 === 1){
         continue;
        }
        echo"$cont<br>";
        if($cont>=30){
            break;
        }
    }
    
    echo"<hr>";
  foreach($numeros =[1,2,3,4,5,6] as $numero){
      if($numero % 2 === 0) continue;
      if($numero === 6)break;
      echo"$numero<br>";
  }

?>