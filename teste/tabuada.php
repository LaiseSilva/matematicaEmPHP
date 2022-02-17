<?php

//Importando a função para calcular a tabuada
require_once('../modulos/calculos.php');
require_once('../modulos/config.php');

//Declaração das váriaveis
$multiplicando = (int) 0;
$maximoMultiplicador = (int) 0;
$resultado = (string) null;


if (isset($_POST['btnCalcular'])) {
   $multiplicando = $_POST['txtTabuada'];
   $maximoMultiplicador = $_POST['txtContador'];

   //validação dos campos nulos
   if ($multiplicando == "" || $maximoMultiplicador == "") {
      echo (ERRO_MSG_CAIXA_VAZIA);
   } else {
      //validação para confirmar se é número
      if (!is_numeric($multiplicando) || !is_numeric($maximoMultiplicador)) {
         echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
      } else {
         //Validação para impedir o zero
         if ($multiplicando == 0 || $maximoMultiplicador == 0) {
            echo ('Qualquer número multplicado por zero é zero.');
         } else {
            //chamando a função para calcular tabuada
            $resultado = calcularTabuada($multiplicando, $maximoMultiplicador);
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./matematicaEmPHP/css/tabuada.css">
   <title>Tabuada</title>
</head>

<body>
   <header>
      <h1>Calculando...</h1>
   </header>
   <div class="uau">
      <span class="titulo">
         <h2>Tabuada</h2>
      </span>
      <form name="tabuada" action="tabuada.php" method="post">
         <div class="multiplicando">
            <h3>Multiplicando:</h3>
            <input type="text" name="txtTabuada" value="">
         </div>
         <div class="multiplicador">
            <h3>Máximo multiplicador:</h3>
            <input type="text" name="txtContador" value="" class="input">
         </div>
         <input type="submit" name="btnCalcular" value="calcular" class="botao">
      </form>


      <div class="resultado-tabuada">
         <?php echo ($resultado); ?>
      </div>
   </div>


</body>

</html>