<?php

include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'Usuario.php';

$c1 = new Cliente('luan@email.com', '123456'); //construtor do usuario
$c1 -> setNome('Luan');
$c1 -> setDataCadastro('01/01/2005');

$g1 = new Gestor('pedro@email.com', '123456', 6000); //construtor do gestor
$g1 -> setNome('Pedro');

$gg1 = new GestorGeral('leandro@email.com', '456879', 9000);

var_dump($c1);
var_dump($g1);
var_dump($gg1);