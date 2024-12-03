<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Nossos Clientes</h2>
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
				$data = mysqli_query($conexao, "select * from tb_membro WHERE cod_igreja = '".$cliente."' order by id_usuario") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>Nome</strong></td>"; 
				echo "<td><strong>Função</strong></td>";
				echo "<td><strong>E-Mail</strong></td>";
				echo "<td><strong>Telefone</strong></td>"; 
				echo "<td><strong>Nascimento</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['nome_membro']."</td>";
					echo "<td>".$info['funcao_membro']."</td>";
					echo "<td>".$info['email']."</td>";
					echo "<td>".$info['telefone']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['dt_nascimento']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					
					echo "<a class='btn btn-success btn-xs' href=?page=view_cadastro-geral&id_membro=".$info['id_membro']."&cod_igreja=".$info['cod_igreja'].">Detalhes</a>";
					
				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
</div>
