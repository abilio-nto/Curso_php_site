<div class="titulo">Laço for</div>

<?php

$array = [1=>"domingo","segunda","terça","quarta","quinta","sexta","sábado"];

foreach($array as $dia){
    echo"$dia<br>";
}
echo"<hr>";
foreach($array as $indice => $dia){
    echo"$indice = $dia<br>";
}
echo"<hr>";
$vogal =[
    ['a','e','i','o','u'],
    ['b','c','d'],
];

foreach($vogal as $indice){
    foreach($indice as $letra){
        echo"$letra ";
    }
    echo"<br>";
}

$numeros =[1,2,3,4,5,6];

echo"<hr>";
foreach($numeros as &$dobro){
    $dobro *= 2;
    echo"$dobro <br>";


}
var_dump($numeros);    

?>