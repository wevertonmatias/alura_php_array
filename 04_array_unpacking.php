<?php

function mensagem(int $num1, int $num2, int $num3): string
{
    return "os valores são {$num1} - {$num2} - {$num3}".PHP_EOL;
}

function loopMensagem(int ...$vetor): void
{
    foreach ($vetor as $item) {
        echo "Item - {$item}".PHP_EOL;
    }
}

$alunos2021 = [
    'Paulo',
    'Carla',
    'Pedro',
    'Camila'
];

$alunos2022 = [
    'Caio',
    'Tata',
    'Felipe',
    'Samia',
    'Tairone'
];

$array_desempacotado = [...$alunos2021, 'Weverton', ...$alunos2021];
var_dump($array_desempacotado);
$numeros = [5, 6, 9];

echo mensagem(...$numeros);

loopMensagem(1,8,9,8);