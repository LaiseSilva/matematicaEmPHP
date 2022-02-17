<?php
/*************************
 * Objetivo: Arquivo de funções matemáticas que poderá ser utilizada dentro do projeto
 * Autora: Laise  
 * Data: 04/02/2022, junto com o professor Marcel
 * Datas de modificação: 17/02/22
 * Versão: 2.0
 *************************/
function operacaoMatematica ($numero1, $numero2, $operacao)
{
    //Declaração de variaveis locais da função
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $result = (double) 0;
    $tipoCalculo = (string) $operacao;

    switch ($tipoCalculo)
        {
            case "SOMAR":
                $result = $num1 + $num2;
                break;
            case "SUBTRAIR":
                $result = $num1 - $num2;
                break;
            case "MULTIPLICAR":
                $result = $num1 * $num2;
                break;
            case "DIVIDIR":
                if($num2 == 0)
                    echo(ERRO_MSG_DIVISAO_ZERO);
                else
                    $result = $num1 / $num2;

                break;
            
            default:
                //Processamento caso não entre em nenhuma das opções
        }

        $result = round($result, 2);
    
    return $result;
}

//Função para calcular a média
function calcularMedia($nota1, $nota2, $nota3, $nota4){

    //Declaração das váriaveis
    $nota1 = (double) $nota1;
    $nota2 = (double) $nota2;
    $nota3 = (double) $nota3;
    $nota4 = (double) $nota4;
    $resultado = (double) 0;

    //realização do cálculo
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    return $resultado;



}

//Função para calcular a tabuada
function calcularTabuada($multiplicando, $maximoMultiplicador)
{
    //Declaração das váriaveis
    $multiplicando = (int) $multiplicando;
    $maximoMultiplicador = (int) $maximoMultiplicador;
    $resultado = (string) null;


    for ($i = 0; $i <= $maximoMultiplicador; $i++) {
        $resultado.= $multiplicando * $i . '<br>';
    }

    return $resultado;
}

//calculos dos números pares e ímpares 
function calcularImparesPares($numeroInicial, $numeroFinal){
    //Declaração das váriaveis
    $numeroInicial = (int) $numeroInicial;
    $numeroFinal = (int) $numeroFinal;

    $numerosPares = (string) null;
    $numerosImpares = (string) null;

    $quantidadeDePar = (string) null;
    $quantidadeDeImpar = (string) null;

    for ($contador = $numeroInicial; $contador <= $numeroFinal; $contador++) {
        //Separação de números pares e impares
        if ($contador % 2 == 0) {
            $numerosPares .= $contador . '<br>';
            //contagem para saber a quantidadade de pares
            $quantidadeDePar ++;
        } else {
            $numerosImpares .= $contador . '<br>';
            //contagem para saber a quantidade de impares
            $quantidadeDeImpar ++;
        }
    }

    return $numerosImpares . $quantidadeDeImpar ;
}
