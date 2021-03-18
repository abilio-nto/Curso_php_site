<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Meus Cursos</h1>
        <h2>Indice de Cursos e Exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <div class="modulos">
               <div class="modulo verde">
                   <h3>Módulo - 1</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=teste&file=teste">Exercicio 1</a></li>
                      
                   </ul>
               </div>
             
        </div>
    </main>
    <footer class="rodape">
        Curso PHP © <?= date("Y");?>
    </footer>
 
</body>
</html>