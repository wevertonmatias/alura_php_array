<?php

function minhaOrdenacao(array $array1, array $arrey2)
{
    if($array1['nota'] > $arrey2['nota']){
        return -1;
    };

    if($arrey2['nota'] > $array1['nota'] ){
        return 1;
    };

    return 0;
}


$notas = [10,8,9,7];

$desordenadas = $notas;
sort($notas);
echo "*********Desordenadas*********".PHP_EOL;
var_dump($desordenadas);
echo "*********Ordenadas*********".PHP_EOL;
var_dump($notas);
echo "******************Ordenação Personalizada******************".PHP_EOL;

$alunos = [
    ['nome' => 'Maria', 'nota' => 8], ['nome' => 'Carlos', 'nota' => 10], ['nome' => 'Paula', 'nota' => 5]
];

usort($alunos, 'minhaOrdenacao');
var_dump($alunos);