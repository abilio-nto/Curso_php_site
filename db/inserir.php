<div class="titulo">Inserir</div>

<?php
require_once('conexao.php');

$sql = "INSERT INTO cadastro (nome,nascimento, email,site, filhos, salario) VALUES ('nayane','1993-08-31','abiliofnto@gmail.com','https://www.abisflio.com.br',0,50492)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

if($resultado){
    echo "Banco criado com sucesso!!!";
}else{
    echo"Erro ao criar o banco";
}

$conexao->close();



?>