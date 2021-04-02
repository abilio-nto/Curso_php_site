<?php
session_start();
print_r($_SESSION);
?>


<?php

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'abilio';
}
?>

<?php

if(!$_SESSION['email']){
    $_SESSION['email'] = 'abiliofcb@gmail.com';
}
?>

<p>

<a href="troca_sessao2.php">Trocar Sessão</a>
<a href="sessao/troca_sessao.php">voltar</a>

</p>