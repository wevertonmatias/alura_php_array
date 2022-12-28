<?php

$alunos = [
    'Paulo',
    'Carla',
    'Pedro',
    'Camila'
];

array_push($alunos, 'Nathalia');
var_dump($alunos);
$alunos[] = 'Sacramento';
var_dump($alunos);

array_unshift($alunos, 'Stephani');
var_dump($alunos);
array_shift($alunos);
var_dump($alunos);
array_pop($alunos);
var_dump($alunos);