<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas para banho', 'Toalhas, toalhas de rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');


$p1 = new Produto('Tenis', 299, $c3);
$p1 -> setDescricao('Tenis para corrida profissional');
//$p1 -> setNome('Tenis para corrida');
//$p1 -> setValor(299);

$p2 = new Produto('Saia Jeans', 100, $c1);

$p3 = new Produto('Calça Branca', 159.68, $c1);
//$p3 -> setNome ('Calça branca');

var_dump($p1);
var_dump($p2);
var_dump($p3);