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
                   <h3>Módulo - 1 Básico</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP</a></li>
                      
                   </ul>
               </div>
               <div class="modulo vermelho">
                   <h3>Módulo - 2 Tipos</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=int">Tipos - Int</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=float">Tipos - Float</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=operacoes">Operações</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio precedência</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desáfio String</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=booleano">Booleano</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tipos&file=conversao">Booleano</a></li>
                      
                   </ul>
               </div>
               <div class="modulo azul">
                   <h3>Módulo - 3 Variáveis</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis</a></li>
                      
                   </ul>
                
               </div>
        </div>
    </main>
    <footer class="rodape">
        Curso PHP © <?= date("Y");?>
    </footer>
 
</body>
</html>