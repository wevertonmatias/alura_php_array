<?php

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

//Une os array redefinindo chave quando for numérica
var_dump(array_merge($alunos2021, $alunos2022));
//Une os dois arrays respeitando as chaves e presesvando a chave do primeiro
var_dump($alunos2021+$alunos2022);

$alunos2021_2 = [
    'teste' => 'Paulo',
    'Carla',
    'Pedro',
    'Camila'
];

$alunos2022_2 = [
    'Caio',
    'teste' => 'Tata',
    'Felipe',
    'Samia',
    'Tairone'
];
//Nesse caso será sobrescrito o valor do primeiro array onde a chave se repita no segundo ou próximos.
var_dump(array_merge($alunos2021_2, $alunos2022_2));