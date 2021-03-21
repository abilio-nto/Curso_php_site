<div class="titulo">Desafio Indice</div>

<?php
 $dados =[
     [
        "nome"=>"joao",
        "idade"=>27,
        "nacionalidade"=>"brasil", 
     ],
     [
        "nome"=>"maria",
        "idade"=>37,
        "nacionalidade"=>"portugal"
     ]
     ];

     print_r($dados);
     echo"<br>";
     $dados[] = [
        "nome"=>"florinda",
        "idade"=>50,
        "nacionalidade"=>"mexico"
     ];
     echo"<br>";
     print_r($dados);
     echo"<br>";
     unset($dados[1]["idade"]); 
     print_r($dados); 
     $dados[2]["vizinho"] = "quico";
     echo"<br>";
     print_r($dados);
     
?>