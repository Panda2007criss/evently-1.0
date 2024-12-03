<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Equipamentos</h2>
		</div>
		
	</div>
	<hr/>

	<div> 
    <?php include "mensagens.php"; 
        $cliente = $_GET['cod_igreja'];

    ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($conexao, "select * from tb_equipamento WHERE cod_igreja = '".$cliente."' order by id_equipamento") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Descrição</strong></td>";
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_equipamento']."</td>";
					echo "<td>".$info['descricao_equipamento']."</td>";
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
</div>
