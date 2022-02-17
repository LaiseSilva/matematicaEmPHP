<?php
/******************************
 * Objetivo: validar os campos dos projetos  
 * Autor: Laise
 * Data: 17/02/22
 * Versão: 1.0
******************************/

//Importe das mensagens de erros
require_once('config.php');

function validarCamposVazios($valor1, $valor2){
    $valor1 = (string) $valor1;
    $valor2 = (string) $valor2;

    if($valor1 == "" || $valor2 == ""){
        echo (ERRO_MSG_CAIXA_VAZIA);
    }else{
        
    }
}

function selecaoVazia($selecao){
    $selecao = (string) null;

    if(!isset($selecao)){
        echo (ERRO_MSG_OPERACAO_CALCULO);
    }else{

    }

}







?>