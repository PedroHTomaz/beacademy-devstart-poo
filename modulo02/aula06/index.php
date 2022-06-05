<?php

include 'vendor/autoload.php';
/*
use Classes\Config\Usuario;
use Classes\Categoria;

$us2 = new Usuario();
$c1 = new Categoria();
*/
// reference the Dompdf namespace
use Dompdf\Dompdf;

$html = '';
for($n = 0; $n < 10; $n++) {
    $html .= 'Ó o pente! <br>';
}

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>hello world</h1><br>'.$html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();