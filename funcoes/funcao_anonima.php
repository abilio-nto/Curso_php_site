<div class="titulo">Declarando tipos</div>


<?php

// declarar variavel para receber a função e no final atribuuir o ponto e virgura por se tratar de uma sentença
$soma = function($a,$b){
    return $a + $b;
};
//funcação recebida por paramentro e executada para gerar a soma ou qualquer outra operação.
$executa = function($a,$b,$op, $funcao){
    $resultado = $funcao($a,$b);

    return "$a $op $b = $resultado";
};

//função passada por parametro. Pode ser eviada por paramtro funções definida de forma padrão com o funtion e o nome da função;

echo $executa(2,3,'+',$soma);

?>