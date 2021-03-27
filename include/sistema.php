<?php

require_once('usuario.php');


$pessoa = new Pessoa('abilio',12345);

$usuario = new Usuario();

$usuario->login('abilio',12345);

?>