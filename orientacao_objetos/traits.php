<div class="titulo">Traits</div>

<?php

 trait validaString{
    public function validaString($sttr){
        return isset($sttr) && $sttr!=='';
    }
    
}

trait validaMelhorString{
    public function validaMelhorString($sttr){
        return isset($sttr) && $sttr!==''? " String Válida ": "String inválida";
    }
}



class Classe{
    use validaString,validaMelhorString;
}


$texto = new Classe();

var_dump($texto ->validaString(' '));
echo $texto->validaMelhorString('a');
?>