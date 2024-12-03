<?php
include_once('../data/conexao.php');

$tipo = $_POST['tipo'];
$igreja = $_POST['cod_igreja'];
$usuario = $_POST['usuario'];
	
date_default_timezone_set('America/Sao_Paulo');
$datahora = date('d/m/Y H:i');


$datai = mysqli_query($conexao, "select * from tb_igreja WHERE cod_igreja = '".$igreja."';") or die(mysqli_error("ERRO: ".$conexao));
while($infoi = mysqli_fetch_array($datai)){ 
    $nomeIgreja = $infoi['nome'];
}

require_once('dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);


$data = mysqli_query($conexao, "select * from tb_evento INNER JOIN tb_igreja ON (tb_evento.cod_igreja = tb_igreja.cod_igreja) WHERE tb_evento.cod_igreja = '".$igreja."';") or die(mysqli_error("ERRO: ".$conexao));
$tot = mysqli_num_rows($data);
$data2 = mysqli_query($conexao, "select * from tb_membro WHERE cod_igreja = '".$igreja."';") or die(mysqli_error("ERRO: ".$conexao));
$tot2 = mysqli_num_rows($data2);
$data3 = mysqli_query($conexao, "select * from tb_funcao WHERE cod_igreja = '".$igreja."';") or die(mysqli_error("ERRO: ".$conexao));
$tot3 = mysqli_num_rows($data3);
$data4 = mysqli_query($conexao, "select * from tb_equipamento WHERE cod_igreja = '".$igreja."';") or die(mysqli_error("ERRO: ".$conexao));
$tot4 = mysqli_num_rows($data4);

$html  = "<table class='table table-striped' width='100%' height='20%' cellspacing='0' cellpading='0'>";
				$html .= "<thead><tr>";
                $html .= "<td width='20,00%' align='center'><img src='../assets/img/logo.jpeg' width='200px' height='200px' /></td>";
                $html .= "<td width='80,00%' align='center'><strong><h1 align='center'>Eventos da Igreja ".$nomeIgreja."</h1></strong></td>";       
				$html .= "</tr></thead><tbody>";
                $html .=  "</tr>";
				$html .= "</tbody></table>";
$html  .= "<table class='table table-striped' width='100%'  cellspacing='5' cellpading='1'>";
				$html .= "<thead><tr>";
                $html .= "<td width='30,00%' align='center'><strong>Nome</strong></td>";
                $html .= "<td width='50,00%' align='center'><strong>Descrição</strong></td>";
                $html .= "<td width='10,00%' align='center'><strong>Data</strong></td>";
                $html .= "<td width='10,00%' align='center'><strong>Hora</strong></td>";       
				$html .= "</tr></thead><tbody>";
                while($info = mysqli_fetch_array($data)){ 
                    $html .= "<tr>";
					$html .= "<td width='30,00%' align='center'>".$info['nome_evento']."</td>";
                    $html .= "<td width='50,00%' align='center'>".$info['descricao_evento']."</td>";
                    $html .= "<td width='10,00%' align='center'>".date('d/m/Y',strtotime($info['data']))."</td>";
                    
                    $html .= "<td width='10,00%' align='center'>".$info['hora_inicio']."</td>";
                   
                }
                $html .=  "</tr>";
				$html .= "</tbody></table>";
				$html .= "<br/><br/>";
                $html .=" <br/><br/><br/>";
                $html .= "Relatório gerado por ".$usuario." em $datahora";
                $html .=" <br/><br/><br/><br/>";
                $html .="<div align='right'>Página 1 de 1</div>";

                ///////////////// MEMBROS

                $html2  = "<table class='table table-striped' width='100%' height='20%' cellspacing='0' cellpading='0'>";
				$html2 .= "<thead><tr>";
                $html2 .= "<td width='20,00%' align='center'><img src='../assets/img/logo.jpeg' width='200px' height='200px' /></td>";
                $html2 .= "<td width='80,00%' align='center'><strong><h1 align='center'>Membros da Igreja ".$nomeIgreja."</h1></strong></td>";       
				$html2 .= "</tr></thead><tbody>";
                $html2 .=  "</tr>";
				$html2 .= "</tbody></table>";
                $html2  .= "<table class='table table-striped' width='100%'  cellspacing='5' cellpading='1'>";
				$html2 .= "<thead><tr>";
                $html2 .= "<td width='30,00%' align='center'><strong>Nome</strong></td>";
                $html2 .= "<td width='10,00%' align='center'><strong>Função</strong></td>";
                $html2 .= "<td width='10,00%' align='center'><strong>Sexo</strong></td>";
                $html2 .= "<td width='20,00%' align='center'><strong>Telefone</strong></td>";       
				$html2 .= "</tr></thead><tbody>";
                while($info2 = mysqli_fetch_array($data2)){ 
                    $html2 .= "<tr>";
					$html2 .= "<td width='30,00%' align='center'>".$info2['nome_membro']."</td>";
                    $html2 .= "<td width='10,00%' align='center'>".$info2['funcao_membro']."</td>";
                    
                    if ($info2['sexo'] == 'M'){ $varnome = "Masculino"; } else {$varnome = "Feminino"; };
                    $html2 .= "<td width='10,00%' align='center'>".$varnome."</td>";
                    $html2 .= "<td width='20,00%' align='center'>".$info2['telefone']."</td>";

                   
                }

                $html2 .=  "</tr>";
				$html2 .= "</tbody></table>";
				$html2 .= "<br/><br/>";
                $html2 .= "Total de ".$tot2." Membros";
                $html2 .=" <br/><br/><br/>";
                $html2 .= "Relatório gerado por ".$usuario." em $datahora";
                $html2 .=" <br/><br/><br/>";
                $html2 .="<div align='right'>Página 1 de 1</div>";
                
                ///////////////////// FUNCOES

               
                $html3  = "<table class='table table-striped' width='100%' height='20%' cellspacing='0' cellpading='0'>";
				$html3 .= "<thead><tr>";
                $html3 .= "<td width='20,00%' align='center'><img src='../assets/img/logo.jpeg' width='200px' height='200px' /></td>";
                $html3 .= "<td width='80,00%' align='center'><strong><h1 align='center'>Funções da Igreja ".$nomeIgreja."</h1></strong></td>";       
				$html3 .= "</tr></thead><tbody>";
                $html3 .=  "</tr>";
				$html3 .= "</tbody></table>";
                $html3  .= "<table class='table table-striped' width='100%'  cellspacing='5' cellpading='1'>";
				$html3 .= "<thead><tr>";
                $html3 .= "<td width='30,00%' align='center'><strong>ID</strong></td>";
                $html3 .= "<td width='40,00%' align='center'><strong>Descrição</strong></td>";
                $html3 .= "<td width='30,00%' align='center'><strong>Cor</strong></td>";   
				$html3 .= "</tr></thead><tbody>";
                while($info3 = mysqli_fetch_array($data3)){ 
                    $html3 .= "<tr>";
					$html3 .= "<td width='30,00%' align='center'>".$info3['id_funcao']."</td>";
                    $html3 .= "<td width='40,00%' align='center'>".$info3['descricao_funcao']."</td>";
                    $html3 .= "<td width='30,00%' align='center'><span class='badge rounded-pill' style='background-color:".$info3['cor_funcao']."; text-color:'#fff'>.....</span></td>";

                }
                $html3 .=  "</tr>";
				$html3 .= "</tbody></table>";
				$html3 .= "<br/><br/>";
                $html3 .=" <br/><br/><br/>";
                $html3 .= "Relatório gerado por ".$usuario." em $datahora";
                $html3 .=" <br/><br/><br/><br/>";
                $html3 .="<div align='right'>Página 1 de 1</div>";


                ///////////////////// EQUIPAMENTO

                $html4  = "<table class='table table-striped' width='100%' height='20%' cellspacing='0' cellpading='0'>";
				$html4 .= "<thead><tr>";
                $html4 .= "<td width='20,00%' align='center'><img src='../assets/img/logo.jpeg' width='200px' height='200px' /></td>";
                $html4 .= "<td width='80,00%' align='center'><strong><h1 align='center'>Equipamentos da Igreja ".$nomeIgreja."</h1></strong></td>";       
				$html4 .= "</tr></thead><tbody>";
                $html4 .=  "</tr>";
				$html4 .= "</tbody></table>";
                $html4  .= "<table class='table table-striped' width='100%'  cellspacing='5' cellpading='1'>";
				$html4 .= "<thead><tr>";
                $html4 .= "<td width='30,00%' align='center'><strong>ID</strong></td>";
                $html4 .= "<td width='70,00%' align='center'><strong>Descrição</strong></td>";   
				$html4 .= "</tr></thead><tbody>";
                while($info4 = mysqli_fetch_array($data4)){ 
                    $html4 .= "<tr>";
					$html4 .= "<td width='30,00%' align='center'>".$info4['id_equipamento']."</td>";
                    $html4 .= "<td width='70,00%' align='center'>".$info4['descricao_equipamento']."</td>";
                   
                }
                $html4 .=  "</tr>";
				$html4 .= "</tbody></table>";
				$html4 .= "<br/><br/>";
                $html4 .=" <br/><br/><br/>";
                $html4 .= "Relatório gerado por ".$usuario." em $datahora";
                $html4 .=" <br/><br/><br/><br/>";
                $html4 .="<div align='right'>Página 1 de 1</div>";
                
                               
                switch($tipo){
                    case 1:
                        $Impressao = $html;
                        break;
                    case 2:
                        $Impressao = $html2;
                        break;
                    case 3:
                        $Impressao = $html3;
                        break;
                    case 4:
                        $Impressao = $html4;
                        break;
                }

$dompdf->loadHtml($Impressao);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper("A4", "landscape");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser

// $dompdf->stream();
$dompdf->stream("", array("Attachment" => false));




?>
