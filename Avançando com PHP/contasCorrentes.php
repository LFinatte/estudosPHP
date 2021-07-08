<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Roberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];

for ($contador = 0; $contador < count($contasCorrentes); $contador++){
    echo $contasCorrentes[$contador]['titular']. PHP_EOL;
};