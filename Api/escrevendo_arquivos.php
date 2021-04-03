<div class="titu">Escrevendo Arquivos</div>

<?php

//abre um arquivo, em modo de escrita
$arquivo = fopen('teste.txt','w');
//escreve dentro do arquivo
fwrite($arquivo, "Escrevendo primeiro texto\n");
//fecha o arquivo
fclose($arquivo);


//abre o arquivo em modo de concatenação. Junta demais textos
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo,"Juntanto mais textos no arquivo");
fclose($arquivo);


//abre um arquivo e garante que ele não seja sobre escrito. Garante que ele seja unico.
$arquivo = fopen('teste2.txt', 'x');
fwrite($arquivo,"Juntanto mais textos no arquivo");
fclose($arquivo);


?>