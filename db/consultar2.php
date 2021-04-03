<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="titulo">Excluir 2</div>


<?php
require_once("conexao.php");
$conexao = novaConexao();
if($_GET['Excluir']){
    $excluirSql = "DELETE FROM cadastro WHERE id=?";
    $stmt = $conexao->prepare($excluirSql);
    $stmt->bind_param("i",$_GET['Excluir']);
    $stmt->execute();
}


$sql = "SELECT id, nome, nascimento, email FROM cadastro";


$resultado = $conexao->query($sql);

$registros = [];
 if($resultado->num_rows>0){
     while($row=$resultado->fetch_assoc()){
         $registros[]=$row;
     }
 }elseif($resultado->error){
     echo"Erro:". $resultado->error;
 }

 if($resultado){
     echo"Busca feita com sucesso";
 }else{
     echo"Erro ao buscar informações";
 }
$resultado->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
      <th>Id</th>
      <th>Nome</th>
      <th>Nascimento</th>
      <th>Email</th>
    </thead>
    <?php foreach($registros as $registro): ?>
        <tr>
       <td><?=$registro['id']?></td>
       <td><?=$registro['nome']?></td>
       <td>
        <?=
          Date('d/m/y', strtotime($registro['nascimento']));
        ?>       
       </td>
       <td><?=$registro['email']?></td>
       <td> 
        <a href="exercicio.php?dir=db&file=consultar2&Excluir=<?=$registro['id']?>" class="btn btn-danger">Excluir</a>
        </td>
       </tr>
    <?php endforeach?>
</table>