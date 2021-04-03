
<div class="titulo">Download de arquivos</div>

<?php
error_reporting(0);
session_start();

$arquivos = $_SESSION['arquivo'] ?? [];

$pastaArquivo = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaArquivo . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp,$arquivo)){
    echo "Arquivo válido e suubmetido com sucesso";
   $arquivos[] = $_FILES['arquivo']['name'];
    $_SESSION['arquivo'] = $arquivos;
}else{
    echo "Erro ao fazer o uploade do arquivo";
}


?>

<form action="#" method="post" enctype="multipart/form-data">
   
   <input name="arquivo" type="file">
   <button>Enviar</button>
</form>

<ul>
   <?php foreach($arquivos as $arquivo): ?>
     
      <li><a href="./files/<?=$arquivo?>">
             <?=$arquivo?>
           </a>
      </li>
   <?php endforeach ?>
</ul>



<style>

input,button{
    font-size:1.3rem;
}

</style>