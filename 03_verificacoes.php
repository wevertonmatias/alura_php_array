<?php
$notas = [
    'Ana' => 8, 'Paulo' => 10, 'Carla' => '6', 'Fabio' => null
];

echo '**********Verificando se é array **********'.PHP_EOL;
var_dump(gettype($notas));
var_dump(is_array($notas));

//echo '***Verificando se um array tem índices numéricos e estão em ordem crescente***'.PHP_EOL;
//var_dump(array_is_list()); disponível apenas em php 8.2
echo '******* Verificando se key existe *******'.PHP_EOL;
var_dump(array_key_exists('Paulo', $notas));
var_dump(array_key_exists('Paula', $notas));
var_dump(isset($notas['Fabio']));
var_dump(isset($notas['Paulo']));

echo '******* Verificando se valor existe *******'.PHP_EOL;
echo 'Alguém tirou 10?'.PHP_EOL;
var_dump(in_array(10, $notas));
//Converte usando o operador ==
var_dump(in_array(6, $notas));

echo 'Quem tirou 10?'.PHP_EOL;
var_dump(array_search(10, $notas));
var_dump(array_search(6, $notas));
var_dump(array_search(2, $notas));