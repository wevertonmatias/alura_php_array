<?php

$aluno = ['Pedro',8, 32];

//list($nome, $nota, $idade) = $aluno;
//estrutura abaixo usa a função list no final
[$nome, $nota, $idade] = $aluno;
var_dump($nome, $nota, $idade);

$aluno2 = [
    'nome' => 'Carlos',
    'nota' => 9,
    'idade' => 27
];

['nome' => $nome2, 'nota' => $nota2,  'idade' => $idade2] = $aluno2;

var_dump($nome2, $nota2, $idade2);