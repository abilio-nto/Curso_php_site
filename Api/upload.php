<div class="titulo">Upload</div>


<form action="#" method="post" enctype="multipart/form-data">

<input name="arquivo"type="file">
<button>Enviar</button>
</form>

<style>
input, button{
    font-size:1.5rem
}


</style>
<?php
   
   print_r($_FILES);

   if($_FILES && $_FILES['arquivo']){
       $pastaUpload = "/Users/Abílio Neto/Desktop/";
       $nomeArquivo = $_FILES['arquivo']['name'];

       $arquivo = $pastaUpload . $nomeArquivo;
       $tmp = $_FILES['arquivo']['tmp_name'];

       if(move_uploaded_file($tmp, $arquivo)){
           echo "Arquivo válido e movido com sucesso";
       }else{
           echo "Erro no upload do arquivo";
       }
   }

?>