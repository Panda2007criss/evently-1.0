<?php
require('dompdf/vendor/autoload.php');
 
use Dompdf\Dompdf;
 
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Olá Mundo</h1><p>O básico do DOMPDF</p>');
$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream('documento.pdf',['Attachment'=>false] );


