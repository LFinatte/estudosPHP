<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}


function sacar(array $conta, float $valorSaque){

    if($valorSaque > $conta['saldo']){
        exibeMensagem("você não pode sacar");

    } else {
        $conta['saldo'] -= $valorSaque;
    };

    return  $conta;
};


function depositar(array $conta, float $valorDeposito){

    if ($valorDeposito < 0){
        exibeMensagem("VOCÊ NÃO PODE DEPOSITAR VALORES NEGATIVOS");
    
    } else {

        $conta['saldo'] += $valorDeposito;
    }

    return $conta;
};
