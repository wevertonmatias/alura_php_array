<?php

$dados = [
    'nome' => 'Felizberto',
    'nota' => 9,
    'idade' => 32
];

extract($dados);
var_dump($nome, $nota, $idade);

$dados_new = compact('nome', 'nota','idade');
var_dump($dados_new);