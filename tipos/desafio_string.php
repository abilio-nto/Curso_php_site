<div class="titulo">Desáfio String</div>

<?php

$findme = "abc";
$strFind = "!abcaBcabc";

$procura = stripos($strFind , $findme);

echo $procura;

?>