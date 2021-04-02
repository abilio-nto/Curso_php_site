<div class="titulo">Erros</div>

<?php

class tratamentoDeErros extends Exception{
    public function __construct($message, $code=0, $previous=null){
        parent::__construct($message, $code=0, $previous=null);
    }
}
     
    function calcularTempoDeAposentadoria($idade){

        if($idade<18){
            throw new tratamentoDeErros("Esta muito longe");
        }
        if($idade>70){
            throw new tratamentoDeErros("Já deveria estar aposentado");
        }
        return 70-$idade;
    }





$idadesAvaliadas = [15,40,50,34,54,72];

foreach($idadesAvaliadas as $idade){
    try{
        $tempoRestante =  calcularTempoDeAposentadoria($idade);
        echo"Idade: {$idade} - Tempo restante para aposentar:{$tempoRestante}<br>";
    }catch(tratamentoDeErros $ex){

        echo"Não foi possível calcular a idade de aposentadoria {$idade}<br>";
        echo"Motivo{$ex->getMessage()}<br>";

    }
}

?>