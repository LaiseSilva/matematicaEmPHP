<?php

/************************************ 
 * Objetivo: Função para calcular a tabuada
 * Autora: Laise
 * Data: 10/02/22
 * Versão: 1.0
 ************************************/

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
