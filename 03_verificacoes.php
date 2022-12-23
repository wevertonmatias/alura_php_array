<?php
$notas = [
    'Ana' => 8, 'Paulo' => 10, 'Carla' => 6, 'Fabio' =>9
];

echo '**********Verificando se é array **********'.PHP_EOL;
var_dump(gettype($notas));
var_dump(is_array($notas));

//echo '***Verificando se um array tem índices numéricos e estão em ordem crescente***'.PHP_EOL;
//var_dump(array_is_list()); disponível apenas em php 8.2