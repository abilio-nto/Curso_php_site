<div class="titulo">Interface</div>


<?php

   interface animal{
       function respira();
   }

     interface cnaino extends animal{
         function latir():string;
     }

   class Cachorro implements animal{
   
         function respira(){
             echo "Respirando<br>";
         }

         function latir(){
              return"AU AU Au Au!";
         }


   }


$animal = new Cachorro();


$animal->respira();
echo $animal->latir();

?>