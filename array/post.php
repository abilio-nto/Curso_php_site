<div class="titulo">$_POST</div>

<form action="#" method="post">
   <input type="text" name="nome">
   <input type="text" name="sobrenome">
    <select name="estado" >
     <option value="paraiba">paraiba</option>
     <option value="pernambuco">Pernambuco</option>
    </select>
    <button>Enviar</button>
</form>


<?php

  print_r($_POST);
  echo count($_POST);
?>
<style>

form > *{
    font-size: 1.3rem;
}

</style>