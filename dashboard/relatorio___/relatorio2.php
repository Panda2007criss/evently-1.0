<?php
// Incluímos a biblioteca DOMPDF
require_once("dompdf/autoload.inc.php");

$html = "
<html>
 <head>
   <style ='text/css'>
     body {
       font-family: Calibri, DejaVu Sans, Arial;
       margin: 0;
       padding: 0;
       border: none;
       font-size: 13px;
     }
 
     #exemplo {
       width: 100%;
       height: auto;
       overflow: hidden;
       padding: 5px 0;
       text-align: center;
       background-color: #CCC;
       color: #FFF;
     }
   </style>
 </head>
 <body>
   <div id='exemplo'>
<p>     Gerar PDF com a classe DOMPDF para PHP.<br />
   </p></div>
 </body>
 </html>";
 
 
// Instanciamos a classe
$dompdf = new DOMPDF();
 
// Passamos o conteúdo que será convertido para PDF
$dompdf->load_html($html);
 
// Definimos o tamanho do papel e
// sua orientação (retrato ou paisagem)
$dompdf->set_paper('A4','portrait');
 
// O arquivo é convertido
$dompdf->render();
 
// Salvo no diretório temporário do sistema
// e exibido para o usuário
$dompdf->stream("nome-do-arquivo.pdf");
?>