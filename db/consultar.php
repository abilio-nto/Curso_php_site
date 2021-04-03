<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="titulo">Inserir</div>

<?php
require_once('conexao.php');

$sql = "SELECT id , nome, nascimento,email from cadastro";


$conexao = novaConexao();

$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
}else if($conexao->error){
    echo"Error:".$conexao->error;
}
$conexao->close();
?>


<table class="table">
 <thead>
   <th>Id</th>  
   <th>Nome</th>  
   <th>Nascimento</th>  
   <th>Email</th>  
 </thead>
 <tbody>
  
    <?php foreach($registros as $registro):?>
     <tr>
       <td><?=$registro['id']?></td>
       <td><?=$registro['nome']?></td>
       <td>
        <?=
          Date('d/m/y', strtotime($registro['nascimento']));
        ?>       
       </td>
       <td><?=$registro['email']?></td>
       <td></td>
       </tr>
    <?php endforeach?>
 
 </tbody>
</table>