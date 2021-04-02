<?php
session_start();
print_r($_SESSION);
?>


<p>Nome:</p><?=$_SESSION['nome'];?>
<p>Email:</p><?=$_SESSION['email'].'<br>';?>

<?=
$_SESSION['email']= 'joseabiliolneto@gmail.com';
?>
<p>
<a href="troca_sessao.php">voltar</a>
</p>
<p>
<a href="basico_sessao_limpar.php">Limpar</a>
</p>