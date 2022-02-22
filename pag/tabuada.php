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
            echo (ERRO_MSG_MULTPLICACAO_ZERO);
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
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../css/tabuada.css">
   <link rel="stylesheet" href="../css/menu.css">
   <title>Tabuada</title>
</head>

<body>
   <header>
      <nav class="menu">
         <ul class="sub">
            <a href="../index.php">
               <li>Home</li>
            </a>
            <a href="calculadora_simples.php">
               <li>Calculadora Simples</li>
            </a>
            <a href="calculo_media.php">
               <li>Cálculo da Média</li>
            </a>
            <a href="parImpar.php">
               <li>Par ou Ímpar</li>
            </a>
            <a href="tabuada.php">
               <li>Tabuada</li>
            </a>
         </ul>
      </nav>
   </header>
   <div class="container">
      <span class="titulo">
         <h2>Tabuada</h2>
      </span>
      <form name="tabuada" action="tabuada.php" method="post">
         <div class="multiplicando">
            <h3 class="textos-secundarios">Multiplicando:</h3>
            <input type="text" name="txtTabuada" value="">
         </div>
         <div class="multiplicador">
            <h3 class="textos-secundarios">Máximo multiplicador:</h3>
            <input type="text" name="txtContador" value="" class="input">
         </div>

         <div class="botao"><input type="submit" name="btnCalcular" value="calcular"></div>
      </form>
      <div class="resultado">
         <p><?php echo ($resultado); ?></p>
      </div>
   </div>


</body>

</html>