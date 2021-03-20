<div class="titulo">Switch case</div>

<?php

 $carro = '';
 $preco = '';

 $categoria = 'Basico';

 switch(strtolower($categoria)){
     case 'luxo':
        $carro = "Renegade";
        $preco = 200000;
        break;
     case 'suv':
        $carro = "Evoque";
        $preco = 150000;
        break;
     case 'basico':
        $carro = "Onix";
        $preco = 55000;
        break;
     default:
        $carro = "Mobi";
        $preco = 34000;           
 }

 echo "Carro: $carro, Categoria: $categoria <br>";
 echo "Preço: $preco";


?>