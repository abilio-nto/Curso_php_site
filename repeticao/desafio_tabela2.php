<div class="titulo">Break continue</div>

<form action="#" method="post">
 <div>
     <label for="linhas">Linhas:</label>
    <input type="number" name="linhas" value=<?= $_POST['linhas'] ??3 ?> >
 </div>  
 <div>
     <label for="colunas">colunas:</label>
     <input type="number" name="colunas" value=<?= $_POST['colunas'] ??3 ?>>
 </div>  


<button>Gerar</button>
</form>

<table>

<?php
 
$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);

if(!$linhas) $linhas = 4;
if(!$colunas) $colunas = 4;

$cont = 1;
for($i=0;$i<$linhas;$i++){
    echo"<tr>";
    for($j=0;$j<$colunas;$j++){
        echo"<td>$cont</td>";
        $cont++;
     
    }
    echo"</tr>";
}




 ?>
 </table>
     



<style>
  form *{
      font-size:1.4rem;
  }
  form > div{
      margin-bottom: 3px;
  }
  table{
      border:1px solid #444;
      border-collapse:collapse;
      margin:20px 0px;
  }
  td, td{
    border:1px solid #444;
    padding:5px;
  }

  .
 
</style>