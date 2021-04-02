<div class="titulo">Gerenciamento Sessao</div>

<?php

session_start();
echo session_id();


$contador = $_SESSION['contador'];
$contador = $contador ? $contador+1 : 1;

echo $contador."<br>";

if($contador % 5 ===0){
    session_regenerate_id();
}

if($contador>=15){
    session_destroy();
}


?>