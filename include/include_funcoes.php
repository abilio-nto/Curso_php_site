<div class="titlulo">include</div>


<?php
  
  echo "Carregando arquivo!!";
  //ao carergar o include dentro da função, o arquivo so será carregado quando chamarmos a função.
  //a váriavel so sera visivel dentro da função. Porém a função soma sera visivel fora do método.
  function carregarArquivo(){
      include('include_arquivo.php');

      echo $variavel."!<br>";
      soma(4,4)."<br>";
  }


  carregarArquivo();



?>