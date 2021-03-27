<div class="titlulo">include</div>


<?php
  
 echo"usando include para carregar aquivo inesistente.";
 //ao usar include e o arquivo nao existir, o mesmo alertara mas não matara a aplicação.
 include('inesistente.php');
 echo "usando require para carregar aquivo inesistente";
 //ao usar require e o arquivo nao existir, o mesmo matara a aplicação. E lançara um erro
 require('inesistente.php');
 echo"Fim do carregamento"



?>