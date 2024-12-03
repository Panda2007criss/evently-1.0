<?php
	include "data\conexao.php";
	$id_administrador = (int) $_GET['id_usuario'];
	$sql = mysqli_query($conexao, "select * from tb_administrador where id_usuario = '".$id_administrador."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do administrador</h3>
	<div class="row">
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_administrador'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Função</strong></p>
			<p><?php echo $row['funcao_administrador'];?></p>
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
			<p><strong>Endereço</strong></p>
			<p><?php echo $row['endereco'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Bairro</strong></p>
			<p><?php echo $row['bairro'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Complemento</strong></p>
			<p><?php echo $row['complemento'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_adm" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=edita_adm&id_usuario=".$row['id_usuario']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_adm&id_usuario=".$row['id_usuario']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
