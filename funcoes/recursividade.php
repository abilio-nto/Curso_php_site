<div class="titulo">Recursividade</div>

<?php
//resolvido com for
function recursividade($numero){
    $soma=0;
    for(;$numero>=1;$numero--){
     $soma+=$numero;
    }
    return $soma;
}

echo recursividade(5)."<br>";

//resolvido com recursividade que chama a função ate a solução do problema

function somandoAteUm($numero){
    if($numero === 1){
        return 1;
    }

    return $numero + somandoAteUm($numero - 1);
}

echo somandoAteUm(5);
?>