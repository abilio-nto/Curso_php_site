
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

  
   
 
  function preencherArray($nome,...$notas){
     
    global $alunos;
     $indice=0;
    $alunos[$indice+1] = $nome=[$notas] ;

  }
  
  preencherArray($nome, $n1,$n2,$n3);
   
   
  //  $alunos=[
  //         'abilio' => ['n1','n2'],
  //         'lima'=>['n3','n4'],

  //  ];
    var_dump($alunos);
       

?>
