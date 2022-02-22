<?php

/**********************************************************************************************************************
 * Objetivo: Arquivo responsável por reunir padronizar todas as váriveis e constantes que serão utilizadas no projeto
 * Autor: Laise, juntamente com o professor Marcel
 * Data: 04/02/2022
 * Versão: 1.0
 ***********************************************************************************************************************/

//Constantes do projeto
/*(NOME_DA_CONSTANTE, depois a mensagem) */
define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Favor preencher todas as caixas!"); </script>');

const ERRO_MSG_OPERACAO_CALCULO = '<script> alert("Favor escolher uma operação válida"); </script>';

const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert("Não é possível realizar calculos de dados não numericos!"); </script>';

const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Não é possível realizar divisão, onde o valor 2 é igual a 0!"); </script>';

const ERRO_MSG_MULTPLICACAO_ZERO = '<script> alert("Qualquer número multplicado por zero é zero."); </script>';

const ERRO_MSG_NUMERO_IGUAL = '<script> alert("O número inicial e o número final não podem ser iguais"); </script>';

const ERRO_MSG_NUMERO_FINAL_MAIOR = '<script> alert("Os número final deve ser maior que o inicial"); </script>';
