<?php
	include "data\conexao.php";
	$cod_igreja = (int) $_GET['cod_igreja'];
	$sql = mysqli_query($conexao, "select * from tb_igreja where cod_igreja = '".$cod_igreja."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da igreja - <?php echo $cod_igreja; ?> </h3>
	<div class="row">
	<div class="col-md-5">
			<img src="assets/img/<?php echo $row['imagem'];?>" width="100px" height="100px">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<p><strong>Nome</strong></p>
			<p><?php echo $row['nome'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Denominação</strong></p>
			<p><?php echo $row['denominacao']; ?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Descrição</strong></p>
			<p><?php echo $row['descricao'];?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<p><strong>Telefone</strong></p>
			<p><?php echo $row['telefone'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Hierarquia</strong></p>
			<p><?php echo $row['hierarquia'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>Capacidade</strong></p>
			<p><?php echo $row['capacidade'];?></p>
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
			<p><strong>Complemento</strong></p>
			<p><?php echo $row['complemento'];?></p>
		</div>
	</div>
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_igreja-my" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=edita_igreja-my&cod_igreja=".$row['cod_igreja']." class='btn btn-primary'>Editar</a>";?>
		</div>
	</div>
</div>
