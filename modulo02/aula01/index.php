<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> nome = 'Pedro';
$p1 -> cpf = '132.545.465-87';
$p1 -> salario = 1000;

var_dump($p1);