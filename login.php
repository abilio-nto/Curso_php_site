<?php
session_start();
error_reporting(0);
?>
<?php



$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']){
    
   $usuarios =[
           [
            "nome"=>"abilio neto",
           "email"=>"abiliofcb@gmail.com",
           "senha"=>"123456",
           ],
           [
           "nome"=>"nayane pimentel",
           "email"=>"nay.p.melho@gmail.com",
           "senha"=>"654321",
           ]
       ];

       foreach($usuarios as $usuario){
        
           $usuarioValido = $email === $usuario['email'];
           $senhaValida = $senha === $usuario['senha'];
          // print_r($usuarioValido);
           print_r($senhaValida);
           if($usuarioValido && $senhaValida){
               $ex = time() + 60 *60 * 24 *30;
               setcookie('usuario',$usuario['nome'],$ex);
                $_SESSION['erros'] = null;
               $_SESSION['usuario'] = $usuario['nome'];
               header('Location: index.php');
           }
       }
       if(!$_SESSION['usuario']){
            
        $_SESSION['erros'] = "Usuario/Senha inválidos";
    }
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <div class="div-cab">    
            <h1>Cursos PHP</h1>
            <h2>Seja Bem-Vindo</h2>
       </div>
    </header>
    <main class="principal">
        
        <div class="Conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']):?>
                <div class="erros">
                <p><?php print_r($_SESSION['erros'])?></p>
                    <?php foreach($_SESSION['erros'] as $erro){?>
                        <p>teste</p>
                        <p><?php $erro?></p>
                    <?php }?>
                </div>
            <?php endif?>  
            <form action="#" method="POST">
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Seu email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha"  placeholder="*************">
                </div>
                <button>Entrar</button>
            </form>  
        </div>
       
    </main>
    <footer class="rodape">
        Curso PHP © <?= date("Y");?>
    </footer>
 
</body>
</html>

