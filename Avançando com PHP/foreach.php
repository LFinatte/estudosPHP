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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
};