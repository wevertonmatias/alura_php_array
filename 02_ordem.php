<?php

$notas = [10,8,9,7];

$desordenadas = $notas;
sort($notas);
echo "*********Desordenadas*********".PHP_EOL;
var_dump($desordenadas);
echo "*********Ordenadas*********".PHP_EOL;
var_dump($notas);
