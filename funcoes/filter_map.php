<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
// $notasFinais1 = [];

// foreach($notas as $nota) {
//     $notasFinais1[] = round($nota);
// }

// print_r($notasFinais1);

// echo '<br>';
// $notasFinais2 = array_map(round, $notas);
// print_r($notasFinais2);

// $apenasOsAprovados1 = [];
// foreach($notas as $nota) {
//     if($nota >= 7) {
//         $apenasOsAprovados1[] = $nota;
//     }
// }

// echo '<br>';
// print_r($apenasOsAprovados1);
 
$aprovado = function($notas){
    
    return $notas >= 7;

};

$apenasOsAprovados2 = array_filter($notas, $aprovado);

print_r($apenasOsAprovados2);