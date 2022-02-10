<?php

$numeroInicial = (int) 0;
$numeroFinal = (int) 0;

if(isset($_POST['btnCalcular'])){
    $numeroFinal = $_POST['teste'];
    echo($numeroFinal);
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par e Ímpar</title>
</head>

<body>
    <form name="par-e-impar" action="index.php" method="post">
    Nº inicial:<select name="" id="">
            <option value="">Por favor selecione um número</option>
            <?php
            for($i = 0; $i <= 500; $i++){
                echo"<option value = '$i' name = '$i'> $i </option>";
            }
            ?>

        </select>

        Nº Final:<select id="">
            <option value="" label="" >Por favor selecione um número</option>
            <?php
            for($i = 100; $i <= 1000; $i++){
                
                echo"<option value = '$i' name='teste'> $i </option>";
            }
            ?>
        </select>
        <input type="submit" name="btnCalcular" value="Calcular"></input>
</form>

<div>
    <h2>Nº pares</h2>
</div>

<div>
    <h2>Nº impares:</h2>
</div>
   
</body>

</html>