<?php

//Declaração das váriaveis
$numeroInicial = (int) 0;
$numeroFinal = (int) 0;
$numerosPares = (string) null;
$numerosImpares = (string) null;
$contador = (int) 0;

if (isset($_POST['btnCalcular'])) {

    //Recuperando os valores do select
    $numeroInicial = $_POST['inicio'];
    $numeroFinal = $_POST['fim'];

    //Validação de caixas vazias
    if ($numeroInicial == "" || $numeroFinal == "") {
        echo ('Por favor selecione uma opção');
    } else {
        //Validação para o número final não ser menor 
        if ($numeroFinal < $numeroInicial) {
            echo ('Os número final deve ser maior que o inicial');
        } //Validação para os números não serem iguais 
        elseif ($numeroInicial == $numeroFinal) {
            echo ('O número inicial e o número final não podem ser iguais');
        } else {
            for ($contador = $numeroInicial; $contador <= $numeroFinal; $contador++) {
                //Separação de números pares e impares
                if ($contador % 2 == 0) {
                    $numerosPares .= $contador . '<br>';
                } else {
                    $numerosImpares .= $contador . '<br>';
                }
            }
        }
    }
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
        Nº inicial:<select name="inicio" id="">
            <option value="">Por favor selecione um número</option>
            <?php
            for ($i = 0; $i <= 500; $i++) {
                echo "<option value = '$i' name = '$i'> $i </option>";
            }
            ?>

        </select>

        Nº Final:<select id="" name="fim">
            <option value="" label="">Por favor selecione um número</option>
            <?php
            for ($i = 100; $i <= 1000; $i++) {

                echo "<option value = '$i'> $i </option>";
            }
            ?>
        </select>
        <input type="submit" name="btnCalcular" value="Calcular"></input>
    </form>

    <div>
        <h2>Nº pares</h2>
        <?php echo ($numerosPares); ?>
    </div>

    <div>
        <h2>Nº impares:</h2>
        <?php echo ($numerosImpares); ?>
    </div>

</body>

</html>