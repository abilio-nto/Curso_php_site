<div class="titulo">Op Relacionais</div>

<?php

  echo "<br>" . var_dump(1 == 1);//true
  echo "<br>" . var_dump(1 > 1);//false
  echo "<br>" . var_dump(1 >= 1);//true
  echo "<br>" . var_dump(1 < 1);//false
  echo "<br>" . var_dump(1 <= 1);//true
  echo "<br>" . var_dump(1 != 1);//false
  echo "<br>" . var_dump(1 <> 1);//false

  echo "<br>" . var_dump(111 == '111');//true
  echo "<br>" . var_dump(111 === '111');//false
  echo "<br>" . var_dump(111 != '111');//false
  echo "<br>" . var_dump(111 !== '111');//false
  
 echo "<p>Relacionais no If/Esle</p><hr>";
  $idade = 70;

  if($idade<18){
      echo "Menor de idade = $idade anos<br>";
  }else if($idade < 65){
      echo "Adulto = $idade anos <br>";
  }else{
      echo "terceira idade = $idade anos";
  }

echo "<p>Spaceship</p><hr>";
    var_dump(5<=>3);
    var_dump(5<=>5);
    var_dump(5<=>50);
    

?>