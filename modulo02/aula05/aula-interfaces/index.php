<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12312312374';
$docX = '13245687912345';

$br = new ValidarBR();
$br -> validarDocumento($cpf);

$us = new ValidarUS();
$us -> validarDocumento($docX);

echo "Funcionou!";