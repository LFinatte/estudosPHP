<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}


function sacar($conta, $valorSaque){

    if($valorSaque > $conta['saldo']){
        exibeMensagem("você não pode sacar");

    } else {
        $conta['saldo'] -= $valorSaque;
    };

    return $conta;
};

function depositar($conta, $valorDeposito){

    $conta['saldo'] += $valorDeposito;

    return $conta;
};


$contasCorrentes = [
    
    123 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    456 => [
    'titular' => 'Maria',
    'saldo' => 10000
    ],

    789 => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]

];

$contasCorrentes [] = [
    'titular' => 'Claudia',
    'saldo' => '2000'
];

$contasCorrentes[789] = depositar($contasCorrentes[789], 500);
$contasCorrentes[123] = sacar($contasCorrentes[123], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " - " . $conta['titular'] . " - " . $conta['saldo']);
};