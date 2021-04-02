<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
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
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <div class="div-cab">    
            <h1>Meus Cursos</h1>
            <h2>Indice de Cursos e Exercicios</h2>
       </div>
    </header>
    <nav class="navegacao" >
      <span class="usuario">Usuário: <?=$_SESSION['usuario']?></span>  
      <a href="logout.php" class="vermelho">Sair</a>  
     </nav>
    <main class="principal">
        <div class="conteudo">
            <div class="modulos">
            <div class="modulo azul">
                   <h3>Módulo 13 -  API</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=api_php&file=data_01">Data #1</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=api_php&file=data_02">Data #2</a></li>
                      
                   </ul>

            </div>
            <div class="modulo verde">
                   <h3>Módulo 12 -  Sessão e cookies</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Tratamentos de erros</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=sessao&file=gerenciamento_sessao">Gerencimaneot de sessao</a></li>
                      
                   </ul>
            </div> 
            <div class="modulo azul-claro">
                   <h3>Módulo 11 -  Tratamentos de arror</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=tratamento_de_erros&file=erros">Tratamentos de erros</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=tratamento_de_erros&file=teste">Desafio Erro</a></li>
                      
                   </ul>
                 
            </div> 
            <div class="modulo amarelo">
                   <h3>Módulo 10 -  namespace</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=namespace&file=namespace">Namespace</a></li>
                      
                   </ul>
            </div>       
            <div class="modulo roxo-escuro">
                   <h3>Módulo 9 -  Includes</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=include&file=include">Include</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=include&file=include_funcoes">include uncoes</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=include&file=include_require">include require</a></li>
                      
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=include&file=require_return">require return</a></li>
                       
                    </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=include&file=include_once.php">include once></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=include&file=sistema">Desafio include once></li>
                      
                   </ul>
               </div>    
            <div class="modulo azul-escuro">
                   <h3>Módulo 8 -  Orientação a Objetos</h3>
                   
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=classe">Classes</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=desafio_data">Desafio Classes</a></li>
                      
                   </ul>
                        
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=contrutor_destrutor">Contrutor Destrutor</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=heranca">Heranca</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=modificador_acesso">Modificador Acesso</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=membro_static">Membro Static</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=interface">Interfaces</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=classe_abstrata">Classes Abstratas</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=desafio7">Desafio 7 erros</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=final">Final</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=traits">Traits</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=traits2">Traits 2</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=metodos_magicos">Metodos mágicos</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=orientacao_objetos&file=polimofismo">Polimofismo</a></li>
                      
                   </ul>
             </div>      
            <div class="modulo vermelho-escuro">
                   <h3>Módulo 7 -  Funções</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=funcoes&file=funcoes">Funcções</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=funcoes&file=funcoes_retorno">Funcções com retorno</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=funcoes&file=desafio_palidromo">Funcções com retorno</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=funcoes&file=argumentos_variaveis">Argumentos variáveis</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=funcoes&file=argumento_padrao">Argumentos padrão</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=declarando_tipos">Declarando tipos</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=funcao_anonima">funcao anonima</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=closure">closure_callable</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=desafio_recursiva">Desafio Recursividade</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Funções</a></li>
                      
                   </ul>
                   <ul>
                   <li><a href="exercicio.php?dir=funcoes&file=filter_map">Filter & Map</a></li>
                      
                   </ul>
             </div>      
            <div class="modulo verde-escuro">
                   <h3>Módulo 6 -  Repetição</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=for">Laço For</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=desafio_for">Desafio For</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=foreach">ForEach</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=break_continue">break continue</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=desafio_break">Desafio break continue</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=while_dowhile"> while do while</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=desafio_tabela">Desafio Tabela</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=repeticao&file=desafio_tabela2">Desafio Tabela 3</a></li>
                      
                   </ul>
                  
              </div>     
            <div class="modulo laranja">
                   <h3>Módulo 5 -  Array</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=basico">Array básico</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=array_mapas">Array Mapas</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=desafio_indice">Desafio Indice</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=desafio_data">Desafio Data</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=operacoes_array">Operações com Array</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio sorteio</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=array_multi">Array Multidimensional</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=array_const">Array Constante</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=array&file=comparacao">Comparação arrays</a></li>
                      
                   </ul>
                
                
                
                
                
                
               </div>
            <div class="modulo roxo">
                   <h3>Módulo 4 -  Controle</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=if_else">IF E ELSE</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=relacionais">Op Relacionais</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=desafio-pi">Desafio Pi</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=op_logico">Operadores Logicos</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=desafio_op_logico">Desafio Operadores Logicos</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=operadorTernario">Operadores ternatio</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=switch">Switch Case</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch Case 1</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=controle&file=defafio_switch2">Desafio Switch Case 2</a></li>
                      
                   </ul>
               </div>
               <div class="modulo azul">
                   <h3>Módulo 3 - Variáveis</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=atribuicao">Atribuição</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis variáveis</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=desafio_variavel">desafio variáveis</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=valor_refencia">Valor e Referencia</a></li>
                      
                   </ul>
                   <ul>
                       <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                      
                   </ul>
                
               </div>
               
               <div class="modulo vermelho">
                   <h3>Módulo 2 -  Tipos</h3>
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
             
               <div class="modulo verde">
                   <h3>Módulo 1 -  Básico</h3>
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
              
        </div>
    </main>
    <footer class="rodape">
        Curso PHP © <?= date("Y");?>
    </footer>
 
</body>
</html>