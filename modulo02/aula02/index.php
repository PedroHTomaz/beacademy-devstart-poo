<?php

include 'Produto.php';


$p1 = new Produto();
$p1 -> alterarNome('Tenis para corrida');
$p1 -> alterarValor(299);

$p2 = new Produto();
$p2 -> alterarNome ('Calça jeans');
$p2 -> alterarValor (99);

var_dump($p1);
var_dump($p2);