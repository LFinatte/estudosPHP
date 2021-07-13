<?php

/*adicionando arquivos*/
require 'funcoes.php';
require 'contasCorrentes.php';


/*adicionando uma conta corrente*/
$contasCorrentes [] = [
    'titular' => 'Claudia',
    'saldo' => '2000'
];

/*sacando e depositando nas contas*/
$contasCorrentes[789] = depositar($contasCorrentes[789], 0);
$contasCorrentes[123] = sacar($contasCorrentes[123], 500);

/*excluindo uma conta corrente*/
unset($contasCorrentes['789']);

/*exibindo as contas existentes*/
foreach ($contasCorrentes as $cpf => $conta) {
    /*armazena os valores do indices do array em variaveis*/
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem($cpf . " - " . $titular . " - " . $saldo);
};