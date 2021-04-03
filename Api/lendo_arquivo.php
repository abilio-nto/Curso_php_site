<div class="titu">Escrevendo Arquivos</div>

<?php

//abre um arquivo, em modo de escrita
//fread passando o arquivo e o parametro numerico exibe o arquivo bit a bit referente ao tamanho passado por paramentro
$arquivo = fopen('teste.txt','r');
echo fread($arquivo,10);
echo "<br>";
echo fread($arquivo,10);
fclose($arquivo);

echo "<hr>";


// A função filesize pega o temanho do arquivo e fread passando o arquivo e o tamamho exibe o texto todo
$arquivo = fopen('teste.txt','r');
$tamanho = filesize('teste.txt');
echo $tamanho, "<br>";
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo "<hr>";


// fgets exibe oo arquivo linha por linha. cada chamada de fget exibe uma linha
$arquivo = fopen('teste.txt','r');
echo fgets($arquivo),"<br>";
echo fgets($arquivo),"<br>";
var_dump(fgets($arquivo));
echo "<br>";
fclose($arquivo);

echo "<hr>";

// A função feof seguida de um while, percorre o arquivo ate seu fim;
$arquivo = fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgets($arquivo);
}
echo "<br>";
fclose($arquivo);


echo "<hr>";

// A função fgetc exibe o arquivo caracter por caracter;
$arquivo = fopen('teste.txt','r');
while(!feof($arquivo)){
    echo fgetc($arquivo);
}
echo "<br>";
fclose($arquivo);

$arquivo = fopen('teste.txt','r+');
echo fgets($arquivo);
echo fgets($arquivo);
fwrite($arquivo,"\nAdicionado durante a leitura");
echo fread($arquivo);
fclose($arquivo);




?>