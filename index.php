<?php

//Declaração das váriaveis
$tabuda = (int) 0;
$contador = (int) 0;
$resultado = (string) null;


if (isset($_POST['btnCalcular'])) {
   $tabuada = $_POST['txtTabuada'];
   $contador = $_POST['txtContador'];

   //validação dos campos nulos
   if ($tabuada == "" || $contador == "") {
      echo ('Por favor preencha todos os campos');
   } else {
      //validação para confirmar se é número
      if (!is_numeric($tabuada) || !is_numeric($contador)) {
         echo ('Utilize dados válidos. Apenas números');
      } else {
         //Validação para impedir o zero
         if ($tabuada == 0 || $contador == 0) {
            echo ('Qualquer número multplicado por zero é zero.');
         } else {
            for ($i = 0; $i <= $contador; $i++) {
               $resultado .= $tabuada * $i . '<br>';
            }
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
   <title>Tabuada</title>
</head>

<body>
   <form name="tabuada" action="index.php" method="post">
      Tabuada:<input type="text" name="txtTabuada" value="">
      Contador:<input type="text" name="txtContador" value="">
      <input type="submit" name="btnCalcular" value="calcular">
   </form>
   <div>
      <?php echo ($resultado); ?>
   </div>
</body>

</html>