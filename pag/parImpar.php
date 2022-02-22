<?php
require_once('../modulos/config.php');

//Declaração das váriaveis
$numeroInicial = (int) 0;
$numeroFinal = (int) 0;
$numerosPares = (string) null;
$numerosImpares = (string) null;
$pares = (string)  null;
$impares = (string) null;
$contador = (int) 0;


if (isset($_POST['btnCalcular'])) {

    //Recuperando os valores do select
    $numeroInicial = $_POST['inicio'];
    $numeroFinal = $_POST['fim'];

    //Validação de caixas vazias
    if ($numeroInicial == "" || $numeroFinal == "") {
        echo (ERRO_MSG_CAIXA_VAZIA);
    } else {
        //Validação para o número final não ser menor 
        if ($numeroFinal < $numeroInicial) {
            echo (ERRO_MSG_NUMERO_FINAL_MAIOR);
        } //Validação para os números não serem iguais 
        elseif ($numeroInicial == $numeroFinal) {
            echo (ERRO_MSG_NUMERO_IGUAL);
        } else {
            for ($contador = $numeroInicial; $contador <= $numeroFinal; $contador++) {
                //Separação de números pares e impares
                if ($contador % 2 == 0) {
                    $numerosPares .= $contador . '<br>';
                    //contagem para saber a quantidadade de pares
                    $pares++;
                } else {
                    $numerosImpares .= $contador . '<br>';
                    //contagem para saber a quantidade de impares
                    $impares++;
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
    <link rel="stylesheet" href="../css/parImpar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Par e Ímpar</title>
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
            <h2>Par ou Ímpar</h2>
        </span>

        <form name="par-e-impar" action="parImpar.php" method="post">

            <span class="organizar-textos">
                <h3 class="textos-secundarios">Nº inicial:</h3> <select name="inicio" id="">
                    <option value="">Por favor selecione um número</option>
                    <?php
                    for ($i = 100; $i <= 1000; $i++) {

                        echo "<option value = '$i'> $i </option>";
                    }
                    ?>
                </select>
            </span>
            <span class="organizar-textos">
                <h3 class="textos-secundarios">Nº Final:</h3><select id="" name="fim">
                    <option value="" label="">Por favor selecione um número</option>
                    <?php
                    for ($i = 100; $i <= 1000; $i++) {

                        echo "<option value = '$i'> $i </option>";
                    }
                    ?>
                </select>
            </span>

            <input type="submit" name="btnCalcular" value="Calcular"></input>
        </form>


        <div class="organizacao-resultado">
            <div class="padrao">
                <h2>Nº pares</h2>
                <div class="resultado"> <?php echo ($numerosPares); ?></div>
            </div>

            <div class="padrao">
                <h2>Nº impares:</h2>
                <div class="resultado"><?php echo ($numerosImpares); ?></div>
            </div>
        </div>

        <div class="organizar-quantidade">
            <div>
                <h3>Quantidade de pares:</h3>
                <?php echo ($pares); ?>
            </div>

            <div>
                <h3>Quantidade de impares:</h3>
                <?php echo ($impares); ?>
            </div>
        </div>
    </div>
</body>

</html>