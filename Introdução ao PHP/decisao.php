<?php

    $idade = 15;
    $numeroDePessoas = 2;

    echo "Você só pode entrar se tiver a partir de 18 anos. Ou a partir de 16 anos acompanhado" .PHP_EOL .PHP_EOL;

    if ($idade >= 18){

        echo "Você tem $idade anos. Pode entrar sozinho." .PHP_EOL;

    } else if ($idade >= 16 && $numeroDePessoas > 1){

            echo "Você tem $idade anos e está acompanhado. Pode entrar" .PHP_EOL;
        
        } else {

            echo "Você só tem $idade anos. Você não pode entrar." .PHP_EOL;
        } 
        
    

    echo PHP_EOL;

    echo "Adeus!";
