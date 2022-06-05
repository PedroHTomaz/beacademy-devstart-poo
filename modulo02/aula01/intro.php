<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$a1 = new Aluno(); //instanciando. Criando um objeto a partir de uma forma.
$a1 -> nome = 'Pedro';
$a1 -> cpf = '123.123.213-46';

$cursoPHP = new Curso(); //objeto Curso.
$cursoPHP -> nome = 'Introducao ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o basico e intermediario do PHP';

echo "Nome: {$a1 -> nome}";