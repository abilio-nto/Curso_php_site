<div class="titulo">Desáfio Operador Lógico</div>


<form action="#" method="post">

      <div>
        <label for="t1">Trabalho 1 (terça)</label>
          <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
          </select>
      </div>
      <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
          <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
          </select>
      </div>

      <button>Executar</button>
</form>

<style>
    button,select{
        font-size:1.5rem;
    }
</style>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] == 1;
    $t2 = !!$_POST['t2'];
    $tv ='';
    $sorverte = false;
    $resultado ='';
   if($t1 && $t2){
      $tv = '50';  
   }else if($t1 xor $t2){
      $tv = '32'  ;
   }
   
   if($t1 || $t2){
     $sorverte = true;
   }
   
   if($tv){
       $resultado ="Vamos comprar uma tv de $tv polegadas.";
   }else{
       $resultado ="<br>Sem tv dessa vez :(";
   }
   if(!$sorverte){
       $resultado .= "<br>Porém estamos mais saldaveis!";
   }else{
       $resultado .= "<br>E o sorvete está liberado \o/";
   }
   
   echo $resultado;
}
?>