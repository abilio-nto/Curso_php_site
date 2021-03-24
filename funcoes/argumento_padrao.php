<div class="titulo">Parametro padrão</div>


<?php

function pedido($comida = 'hamburguer', $bebida='agua'){
    return"Seu pedido: $comida e uma $bebida.";
}

echo pedido();

?>