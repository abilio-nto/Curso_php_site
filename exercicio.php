<?php
session_start();
if($_COOKIE['usuario']){
    $_SESSION['usuario']=$_COOKIE['usuario'];
}
if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Meus Cursos</h1>
        <h2>Visualizador de Exercicios</h2>
    </header>
    <nav class="navegacao" >
            <span class="usuario">Usuário: <?=$_SESSION['usuario']?></span>  
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php" >Voltar</a>
            <a href="logout.php" class="vermelho">Sair</a>  
            
    </nav>
    <main class="principal">
         
            <div class="conteudo">
            <?php
                 //include("teste/teste.php")
                include(__DIR__ ."/{$_GET['dir']}/{$_GET['file']}.php");
             ?>
            </div>
    </main>
    <footer class="rodape">
        Curso PHP © <?= date("Y");?>
    </footer>
 
</body>
</html>