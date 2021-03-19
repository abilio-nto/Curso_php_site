<div class="titulo">Integração com CSS</div>


<h1 center>
<?php 
   echo "Olá";
   echo " <em>";
   echo " Mundo";
   echo "</em>";
?>
</h1>

<?= "<div center azul>Outra forma de me 'Expressar'.</div>"?>

<div center><button dobro><?="Legal"?></button></div>


<Style>
   
   button{
      padding: 10px <?= 2*10?>px;
      background-color: #4286f4;
      color:#EEE;
      font-weight: bold;
      border-radius: 10px;
      border:none;
   }

   [center]{
      display:flex;
      justify-content:center;
   }
   [azul]{
      color:#4286f4;
   }

   [dobro]{
      font-size:2rem;
   }


</Style>