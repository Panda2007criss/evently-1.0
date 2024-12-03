<?php
include_once('../data/conexao.php');
// include autoloader
require_once "dompdf/autoload.inc.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$data = mysqli_query($conexao, "select * from tb_financeiro INNER JOIN tb_aluno on (tb_financeiro.cod_aluno = tb_aluno.mat_aluno) WHERE tb_financeiro.status_pagto = '0';") or die(mysqli_error("ERRO: ".$conexao));
$html = "<h1 align='center'>BOLETOS EM ABERTO</h1>";
$html  .= "<table class='table table-striped' width='100%' cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
				$html .= "<td width='16,66%'><strong>Aluno</strong></td>";
                $html .= "<td width='16,66%'><strong>Descrição</strong></td>"; 
                $html .= "<td width='16,66%'><strong>Boleto</strong></td>"; 
                $html .= "<td width='16,66%'><strong>Valor</strong></td>"; 
                $html .= "<td width='16,66%'><strong>Mês</strong></td>";       
				$html .= "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					$html .= "<tr>";
					$html .= "<td>".$info['nome_aluno']."</td>";
                    $html .= "<td>".$info['descricao']."</td>";
                    $html .= "<td>".$info['numero_boleto']."</td>";
                    $html .= "<td>".$info['valor']."</td>";
                    $html .= "<td>".$info['mensalidade']."</td>";
					$html .= "<td class='actions btn-group-sm d-flex justify-content-center'>";
				}
				$html .= "</tr></tbody></table>";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper("A4", "portrait");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

// $dompdf->stream();
$dompdf->stream("", array("Attachment" => false));


?>



