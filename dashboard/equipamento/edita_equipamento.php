<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_equipamento = (int) $_GET['id_equipamento'];
	$sql = mysqli_query($conexao, "select * from tb_equipamento where id_equipamento = '".$id_equipamento."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do equipamento- <?php echo $id_equipamento;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_equipamento&id_equipamento=<?php echo $row['id_equipamento']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $row["descricao_equipamento"]; ?>">
		</div>
	</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_equipamento" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>