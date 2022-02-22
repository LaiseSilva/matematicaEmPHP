<?php
//importando arquivos
require_once('../modulos/calculos.php');
require_once('../modulos/config.php');

//Declaração de variáveis
$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;

//Validação para tratar se o botão foi clicado
if (isset($_POST["btncalc"])) {

    //Recebendo dados utilizando POST do formulário
    $nota1 = $_POST["txtn1"];
    $nota2 = $_POST["txtn2"];
    $nota3 = $_POST["txtn3"];
    $nota4 = $_POST["txtn4"];


    //Validação para tratar de caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "") {
        echo (ERRO_MSG_CAIXA_VAZIA);
    } else {
        //Validação de tratamento para valores inválidos
        if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        } else {
            $media = calcularMedia($nota1, $nota2, $nota3, $nota4);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" href="../css/formularioMedia.css">
    <link rel="stylesheet" href="../css/menu.css">
    <meta charset="utf-8">
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
    <div id="conteudo">
        <header id="titulo">
            Calculo de Médias
        </header>

        <div id="form">
            <form name="frmMedia" method="post" action="calculo_media.php">
                <div>
                    <label>Nota 1:</label>
                    <input type="text" name="txtn1" value="<?php echo ($nota1) ?>">
                </div>

                <div>
                    <label>Nota 2:</label>
                    <input type="text" name="txtn2" value="<?php echo ($nota2) ?>">
                </div>

                <div>
                    <label>Nota 3:</label>
                    <input type="text" name="txtn3" value="<?php echo ($nota3) ?>">
                </div>

                <div>
                    <label>Nota 4:</label>
                    <input type="text" name="txtn4" value="<?php echo ($nota4) ?>">
                </div>
                <div>
                    <input type="submit" name="btncalc" value="Calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>

        </div>
        <footer id="resultado">
            A média é: <?php echo ($media); ?>
        </footer>
    </div>


</body>

</html>