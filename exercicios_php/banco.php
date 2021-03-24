<?php



$clientesContas =[
        
    '123.345.456-76' => [
           
        'titular'=>'abilio',
        'saldo' => 2000,

    ],
    '123.656.776-96' => [
           
        'titular'=>'maria',
        'saldo' => 4000,

    ], 
     '553.785.556-06' => [
           
        'titular'=>'joao',
        'saldo' => 3000,

    ]
];

//  echo $clientesContas['553.785.556-06']['saldo'];

 
function imprimirMensagem($mensagem){

    echo "$mensagem <br>";

}


function Sacar($conta, $valor){
     
    echo $clientesContas[$conta]['saldo'];
//     if($valor>$clientesContas[$conta]['saldo']){
//         imprimirMensagem("Voçê não pode sacar desta conta! Saldo Insuficiente!!!!");
//     }else{
//         $clientesContas[$conta]['saldo']-=$valor;
//         imprimirMensagem("Saque efetuado com sucesso. Novo saldo: $clientesContas");
//     }
 }

Sacar('553.785.556-06',500);


?>