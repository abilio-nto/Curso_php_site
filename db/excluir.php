<div class="titulo">Delete #1</div>

<?php

require_once("conexao.php");




$sql = "DELETE FROM cadastro WHERE id=3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Banco criado com sucesso!!!";
}else{
    echo"Erro ao criar o banco";
}

$conexao->close();


?>