<?php
$notasBimestre1 = [
    'Paulo' => 8,
    'Carla' => 7,
    'Pedro' => 9,
    'Camila' => 10
];

$notasBimestre2 = [
    'Paulo' => 8,
    'Carla' => 6,
    'Pedro' => 9,
];

//Verifica os valores dos arrays
//var_dump(array_diff($notasBimestre1, $notasBimestre2));

//Verifica as chaves dos arrays
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//Verifica as chaves e valores dos array
$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);
//var_dump(array_keys($alunosFaltantes));
//var_dump(array_keys($alunosFaltantes, 7));
//var_dump(array_values($alunosFaltantes));
//$alunosNomes = array_keys($alunosFaltantes);
//$alunosNotas = array_values($alunosFaltantes);
//var_dump(array_combine($alunosNotas, $alunosNomes));
var_dump(array_flip($alunosFaltantes));