<div class="titulo">Desafio Switch 1</div>


<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
       <option value="km-milha"> Km > milha </option>
       <option value="milha-km"> milha > km </option>
       <option value="metros-km"> Metros > Km </option>
       <option value="km-metros"> Km > Metros </option>
    </select>
    <button>Calcular</button>
 </form>
<style>

form > *{
    font-size: 1.5rem;
}

</style>

<?php
$paramentro = $_POST['param'];
$distancia = $_POST['conversao'];
$convertido ;

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

switch($distancia){
    case "km-milha":
        $convertido = $paramentro * FATOR_KM_MILHA;
        $resposta = "$paramentro  KM = $convertido  Milhas";
        break;
    case "milha-km":
        $convertido = $paramentro / FATOR_KM_MILHA;
        $resposta = "$paramentro  Milhas = $convertido ekm";
        break;
    case "metros-km":
        $convertido = $paramentro / FATOR_METRO_KM;
        $resposta = "$paramentro Metros = $convertido km";
        break;  
    case "km-metros":
        $convertido = $paramentro * FATOR_METRO_KM;
        $resposta = "$paramentro  Km = $convertido  Metros";
        break;       
    
}



echo $resposta;

?>