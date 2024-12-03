<?php
include_once('../data/conexao.php');

$usuario = $_GET['usuario'];
date_default_timezone_set('America/Sao_Paulo');
$datahora = date('d/m/Y H:i');

$date = date('Y-m-d');


require_once('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);


$data = mysqli_query($conexao, "select * from tb_igreja INNER JOIN tb_assinatura ON (tb_igreja.cod_igreja = tb_assinatura.cod_igreja) WHERE tb_assinatura.dt_vencimento < '".$date."' AND tb_assinatura.pagto = '0';") or die(mysqli_error("ERRO: ".$conexao));

$html  = "<table class='table table-striped' width='100%'  cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
                $html .= "<td width='30,00%' align='center'><img src='../assets/img/logo.jpeg' width='200px' height='200px' /></td>";
                $html .= "<td width='70,00%' align='center'><strong><h1 align='center'>Mensalidades em Aberto</h1></strong></td>";       
				$html .= "</tr></thead><tbody>";
                $html .=  "</tr>";
				$html .= "</tbody></table>";


$html  .= "<table class='table table-striped' width='100%'  cellspacing='10' cellpading='1'>";
				$html .= "<thead><tr>";
                $html .= "<td width='50,00%' align='center'><strong>Cliente</strong></td>";
                $html .= "<td width='50,00%' align='center'><strong>Valor</strong></td>";       
                $html .= "<td width='50,00%' align='center'><strong>Vencimento</strong></td>";       
				$html .= "</tr></thead><tbody>";
                while($info = mysqli_fetch_array($data)){
                    $html .= "<tr>";
					$html .= "<td width='50,00%' align='center'>".$info['nome']."</td>";
                    $html .= "<td width='50,00%' align='center'>R$ ".$info['valor']."</td>";
                    $html .= "<td width='50,00%' align='center'>".date('d/m/Y',strtotime( $info['dt_vencimento']))."</td>";
                    
                }
                $html .=  "</tr>";
				$html .= "</tbody></table>";
				$html .= "<br/><br/><br/><br/><br/><br/>";
                $html .= "Relatório gerado por ".$usuario." às $datahora";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper("A4", "portrait");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

// $dompdf->stream();
$dompdf->stream("", array("Attachment" => false));


?>



