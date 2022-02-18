<?php
//importe de configurações de váriaveis e constantes
require_once('../modulos/config.php');

require_once('../modulos/validacao.php');

//importe do arquivo funções para cáulos matemáticos
require_once('../modulos/calculos.php');

//Declaração de variáveis
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcao = (string) null;

//Validação para verificar se o botão foi clicado
if (isset($_POST['btncalc'])) {
	//Recebe os dados do formulário
	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];
	$valor3 = $_POST['rdocalc'];

	//Validação de tratamento de erro para caixa vazia
	if (validarCamposVazios($_POST['txtn1'], $_POST['txtn2']))
		echo (ERRO_MSG_CAIXA_VAZIA);

	else {
		//Validação de tratamento de erro para rdo sem escolha
		if (!isset($_POST['rdocalc']))
			echo (ERRO_MSG_OPERACAO_CALCULO);
		else {
			//Validação para tratamento de erro para dados incorreto
			if (!is_numeric($valor1) || !is_numeric($valor2))
				echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
			else {
				//apenas podemos receber o valor do rdo quando ele existir
				$opcao = strtoupper($_POST['rdocalc']);

				//chamada para a função que vai realizar os calculos matematicos
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);
			}
		}
	}
}


?>
<html>

<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" href="../css/calculadora.css">
	<link rel="stylesheet" href="../css/header.css">
</head>

<body>
	<header>
		<h1>Calculando...</h1>
	</header>

	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="post" action="calculadora_simples.php">
				Valor 1:<input type="text" name="txtn1" value="<?= $valor1; ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?= $valor2; ?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" <?= $opcao == 'SOMAR' ? 'checked' : null; ?>>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair" <?= $opcao == 'SUBTRAIR' ? 'checked' : null; ?>>Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar" <?= $opcao == 'MULTIPLICAR' ? 'checked' : null; ?>>Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir" <?= $opcao == 'DIVIDIR' ? 'checked' : null; ?>>Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<?= $resultado; ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>