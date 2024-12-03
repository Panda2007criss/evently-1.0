<?php
	include "data\conexao.php";
	$id_membro = (int) $_GET['id_membro'];
	$sql = mysqli_query($conexao, "select * from tb_membro where id_membro = '".$id_membro."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do membro</h3>
	<div class="row">
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_membro'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Função</strong></p>
			<p><?php echo $row['funcao_membro'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data Nascimento</strong></p>
			<p><?php echo date('d/m/Y',strtotime($row['dt_nascimento'])); ?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Sexo</strong></p>
			<p><?php echo $row['sexo'];?></p>
		</div>
	</div>
	<div class="row">

	<div class="row">
		<div class="col-md-4">
			<p><strong>RG</strong></p>
			<p><?php echo $row['rg'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>CPF</strong></p>
			<p><?php echo $row['cpf'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>E-Mail</strong></p>
			<p><?php echo $row['email'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Telefone </strong></p>
			<p><?php echo $row['telefone'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>CEP</strong></p>
			<p><?php echo $row['cep'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Estado</strong></p>
			<p><?php echo $row['estado'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Cidade</strong></p>
			<p><?php echo $row['cidade'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Bairro</strong></p>
			<p><?php echo $row['bairro'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Complemente</strong></p>
			<p><?php echo $row['complemento'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_cadastro-geral" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=edita_membro&id_membro=".$row['id_membro']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_membro&id_membro=".$row['id_membro']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
