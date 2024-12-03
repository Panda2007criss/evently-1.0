<?php
include_once('data/conexao.php');



if (isset($_GET['id_evento'])):
    $id_evento = $_GET['id_evento'];
    $nome_evento = $_GET['nome_evento'];
else:
    $id_evento = 3;
endif;



require('dompdf/vendor/autoload.php');

define("DOMPDF_ENABLE_REMOTE", false);
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$data = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) INNER JOIN tb_voluntario ON (tb_escala.id_voluntario = tb_voluntario.id_membro) where id_evento = '".$id_evento."';") or die(mysqli_error("ERRO: ".$conexao));
$html = "<h1 align='center'>ESCALA DO EVENTO</h1> <h2 align='center'>".$nome_evento."</h2>";
$html  .= "<table class='table table-striped' width='100%'  cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
                $html .= "<td width='50,00%'><strong>Voluntário</strong></td>";
                $html .= "<td width='50,00%'><strong>Função</strong></td>";       
				$html .= "</tr></thead><tbody>";
                while($info = mysqli_fetch_array($data)){
                    $html .= "<tr>";
					$html .= "<td width='50,00%'>".$info['nome_voluntario']."</td>";
                    $html .= "<td width='50,00%'>".$info['descricao_funcao']."</td>";
                    
                }
                $html .=  "</tr>";
				$html .= "</tbody></table>";
				

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper("A4", "portrait");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

// $dompdf->stream();
$dompdf->stream("", array("Attachment" => false));


?>



