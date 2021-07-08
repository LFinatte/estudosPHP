<?php

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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . PHP_EOL;
};