
<form action="#" method="post">

<div>
  <label for="nome">Nome:</label>
  <input type="text" name="aluno">
</div>
<div>
  <label for="nota">Nota:</label>
  <input type="text" name="n1">
  <input type="text" name="n2">
  <input type="text" name="n3">
</div>
<button>Enviar</button>

</form>
<?php

  $nome = $_POST['aluno'];
  $n1 = intval($_POST['n1']);
  $n2 = intval($_POST['n2']);
  $n3 = intval($_POST['n3']);

  
  $alunos = [];
 
  
  
  $cont = 0;
  if(!empty($alunos)===1){
    $alunos[$cont][$nome]  = [$n1,$n2,$n3];
    $cont++;
    print_r($alunos);
  }else{
    echo "aqui";
  }

       

?>
