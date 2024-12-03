<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Minhas Escala</h2>
		</div>

	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($conexao, "select * from tb_escala INNER JOIn tb_evento ON (tb_escala.id_evento = tb_evento.id_evento) WHERE tb_escala.cod_igreja = '".$_SESSION['cod_igreja']."' GROUP BY tb_escala.id_evento;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Evento</strong></td>"; 
				echo "<td><strong>Data</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_evento']."</td>";
					echo "<td>".$info['nome_evento']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['data']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-info btn-xs' href=?page=view_escala&id_evento=".$info['id_evento']."> VER ESCALA </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=edita_escala&id_evento=".$info['id_evento']."> EDITAR </a>";
					echo "<a href=?page=excluir_escala&id_evento=".$info['id_evento']." class='btn btn-secondary btn-xs'> EXCLUIR </a></td>";
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
</div>
