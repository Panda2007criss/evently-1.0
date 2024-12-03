<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$cod_igreja = (int) $_GET['cod_igreja'];
?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Assinaturas</h2>
		</div>

	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($conexao, "select * from tb_assinatura WHERE cod_igreja = '".$cod_igreja."' Order By dt_vencimento DESC;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>Vencimento</strong></td>"; 
				echo "<td><strong>Valor</strong></td>"; 
				echo "<td><strong>Forma Pagamento</strong></td>"; 
				echo "<td><strong>Status</strong></td>";
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>";
                    echo date('d/m/Y',strtotime($info['dt_vencimento']));"</td>";
					echo "<td> R$ ".$info['valor']."</td>";
					echo "<td>"; if ($info['metodo_pagto'] == '1'){ echo "PIX";} elseif ($info['metodo_pagto'] == '2'){ echo "CARTÂO DE CRÉDITO"; } elseif ($info['metodo_pagto'] == '3') { echo "BOLETO BANCÁRIO";} else {echo "";} "</td>";
					echo "<td>"; if ($info['pagto'] == "1"){ echo "PAGO"; } else { echo "EM ABERTO";} 	
					echo "</td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
				}
            
				echo "</tr></tbody></table>";

			?>				
		</div>
	</div>
</div>
