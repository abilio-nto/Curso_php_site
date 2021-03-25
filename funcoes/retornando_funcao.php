<div class="titulo">Retornando funções</div>

<?php
//sem a palavra use  n temos acesso a variável $a na função retornada.
function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}
//para acelerar o processamento das informações podemos adiciuonar o valor 
//de retorno da função e chamar a mesma quantas vezes for necessario.
echo "<br>".soma(3)(3);
$somaDois = soma(3);
echo "<br>".$somaDois(3);
?>