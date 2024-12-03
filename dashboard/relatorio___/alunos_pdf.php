<?php
include_once('../data/conexao.php');
// include autoloader
require_once "dompdf/autoload.inc.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$data = mysqli_query($conexao, "select * from tb_aluno INNER JOIN tb_turma_vinculo on (tb_aluno.mat_aluno = tb_turma_vinculo.cod_aluno) INNER JOIN tb_turma oN (tb_turma_vinculo.cod_turma = tb_turma.cod_turma);") or die(mysqli_error("ERRO: ".$conexao));
$html = "<h1 align='center'>LISTA DE ALUNOS</h1>";
$html  .= "<table class='table table-striped' width='100%' cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
				$html .= "<td width='16,66%'><strong>Aluno</strong></td>";
                $html .= "<td width='16,66%'><strong>Matrícula</strong></td>"; 
                $html .= "<td width='16,66%'><strong>CPF</strong></td>"; 
                $html .= "<td width='16,66%'><strong>Idade</strong></td>"; 
                $html .= "<td width='16,66%'><strong>Turma</strong></td>";       
				$html .= "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 

                    $dataNascimento = $info['idade'];
                    $date = new DateTime($dataNascimento ); 
                    $interval = $date->diff( new DateTime( date('Y-m-d') ) );

					$html .= "<tr>";
					$html .= "<td>".$info['nome_aluno']."</td>";
                    $html .= "<td>".$info['mat_aluno']."</td>";
                    $html .= "<td>".$info['cpf']."</td>";
                    $html .= "<td>".$interval->format( '%Y anos' )."</td>";
                    $html .= "<td>".$info['nome_t']."</td>";
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



