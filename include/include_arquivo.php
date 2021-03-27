<?php

echo'Carregando: include_aqruivo.php<br>';

$variavel='Esotu aqui';


//A função function_existe verifica se a função esta setada evitado a sobreescrita da mesma
if(!function_exists('soma')){
    function soma($a,$b){
        return $a+$b;
    }
}


?>