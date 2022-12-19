<?php
$teste = [
    1 => 'um',
    true => 'dois',
    1.9 => 'tres'
];

$transportes =[
    'carro' => 'azul',
    'aviao' => 'verde',
    'moto' => 'vermelha',
    'barco' => 'branca'
    ];

foreach($transportes as $chave => $valor){
    echo "Tipo :{$chave} - Cor: {$valor}". PHP_EOL;
}
echo "Total de itens ".count($transportes). PHP_EOL;
//var_dump($teste);