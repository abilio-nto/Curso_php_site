<div class="titulo">Valor e Refetrenica</div>

<?php
 $valor = "valor inicial";
 echo "<br> $valor";
 $atribuicaoValor = $valor;
 echo "<br> $atribuicaoValor";
 $atribuicaoValor = "novo valor";
 echo "<br> $valor";
 echo "<br> $atribuicaoValor";

 echo "<p>Atribuição por reverencia</p>";

 $valorReferencia = &$valor;
 echo "<br> $valorReferencia";
 $valorReferencia = "Valor referencia mudado";
 echo "<br> $valorReferencia $valor";
?>