<?php
include_once('../data/conexao.php');

$cod  = $_GET['cod'];
$usuario = $_GET['usuario'];

$data2 = mysqli_query($conexao, "select * from tb_igreja WHERE cod_igreja = '".$cod."';") or die(mysqli_error("ERRO: ".$conexao));
while($info2 = mysqli_fetch_array($data2)){ 
 $imagem = $info2['imagem'];
}



date_default_timezone_set('America/Sao_Paulo');
$datahora = date('d/m/Y H:i');

if (isset($_GET['id_evento'])):
    $id_evento = $_GET['id_evento'];
    $nome_evento = $_GET['nome_evento'];
else:
    $id_evento = 3;
endif;




require_once('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);


$data = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) INNER JOIN tb_membro ON (tb_escala.id_membro = tb_membro.id_membro) where tb_escala.id_evento = '".$id_evento."';") or die(mysqli_error("ERRO: ".$conexao));

$html  = "<table class='table table-striped' width='100%'  cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
                $html .= "<td width='30,00%' align='center'><img src='../assets/img/".$imagem."' width='200px' height='200px' /></td>";
               
                $html .= "<td width='60,00%' align='center'><strong><h1 align='center'>ESCALA DO EVENTO :</h1></strong></td>";       
				$html .= "</tr></thead><tbody>";
                $html .=  "</tr>";
				$html .= "</tbody></table>";

                $html  .= " <h2 align='center'>".$nome_evento."</h2>";
                $html  .= "<table class='table table-striped' width='100%'  cellspacing='10' cellpading='1'>";
				$html .= "<thead><tr>";
                $html .= "<td width='50,00%' align='center'><strong>Voluntário</strong></td>";
                $html .= "<td width='50,00%' align='center'><strong>Função</strong></td>";       
				$html .= "</tr></thead><tbody>";
                while($info = mysqli_fetch_array($data)){
                    $html .= "<tr>";
                    if ($info['id_membro'] == '0'){$varNome = "Vaga em aberto"; }else {$varNome = $info["nome_membro"]; }
					$html .= "<td width='50,00%' align='center'>".$varNome."</td>";
                    $html .= "<td width='50,00%' align='center'>".$info['descricao_funcao']."</td>";
                    
                }
                $html .=  "</tr>";
				$html .= "</tbody></table>";
				$html .= "<br/><br/><br/><br/><br/><br/>";
                $html .= "Relatório gerado por ".$usuario." em $datahora";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper("A4", "portrait");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

// $dompdf->stream();
$dompdf->stream("", array("Attachment" => false));


?>



