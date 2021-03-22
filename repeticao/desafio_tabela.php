<div class="titulo">Break continue</div>

<?php
 
$matriz = [
    ['01','02','03','04','05',],
    ['06','07','08','09','10',],
    ['11','12','13','14','15',],
    ['16','17','18','19','20',],
];

// $tr='';
// $td='';

// foreach($matriz as $indice ){
//      $tr = "<tr></tr>";
//     foreach($indice as $valor){
//      $td = "<td>$valor</td>";
        
//     }
// }

?>

<table>
   <?php
    
    foreach($matriz as $indice ){
      echo "<tr>";
       foreach($indice as $valor){
        echo"<td>$valor</td>";
           
       }
       echo "</tr>";
    }
    
   
   ?>
</table>

<table>
   <?php
    
    foreach($matriz as $indice => $array){
        $style = $indice % 2 === 0 ? 'background-color:#F2CEC7;' : '';
        
        echo"<tr style='{$style}'>";
    
       foreach($array as $valor){
        echo"<td>$valor</td>";
           
       }
       echo "</tr>";
    }
    
   
   ?>
</table>

<style>
  
  table{
      border:1px solid #444;
      border-collapse:collapse;
      margin:20px 0px;
  }
  td, td{
    border:1px solid #444;
    padding:5px;
  }

  .cor{
      background-color: #F2CEC7;
  }
 
</style>