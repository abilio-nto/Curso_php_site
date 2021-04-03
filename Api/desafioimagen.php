<div class="titulo">Desafio imagens</div>

<?php
error_reporting(0);
session_start();
$extensoes_permitidas = array('.jpg', '.gif', '.png');
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__."/../fotos/";

$nomeArquivo = $_FILES['arquivos']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivos']['tmp_name'];

if(move_uploaded_file($tmp,$arquivo)){
    echo"Arquivo submetido com sucesso";
    if(in_array($nomeArquivo, $arquivos)){
        
    }else{
      $arquivos[] = $nomeArquivo;
    }
    
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "Erro ao suubmeter arquivo";
}
print_r($arquivos);
?>

<form action="#" method="post" enctype="multipart/form-data">
     <input type="file" name="arquivos">
     <button>Enviar</button>
</form>


<ul>
  <?php foreach($arquivos as $arquivo):?>
    <?php
       $valido = '';
       $extensao = strrchr($arquivo,'.');
       if(in_array($extensao,$extensoes_permitidas)){
       $valido = $arquivo;
       
       }  
      ?>

      <li>
       
       <img src="./fotos/<?=$valido?>">
       
      </li>
    
  <?php endforeach?>

</ul>
