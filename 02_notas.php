<?php

$notas = [10,8,9,7,6];

sort($notas);

var_dump($notas);
echo '************ inverso **************'.PHP_EOL;
rsort($notas);
var_dump($notas);
echo '************ Mantendo as chaves e ordenando por valores ************' .PHP_EOL;
$notas2 = [
    'Ana' => 8, 'Paulo' => 10, 'Carla' => 6, 'Fabio' =>9
];
arsort($notas2);
var_dump($notas2);
echo '************ Ordenando pela chave ************'.PHP_EOL;
ksort($notas2);
var_dump($notas2);
