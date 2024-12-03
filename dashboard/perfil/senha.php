<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	
	$sql = mysqli_query($conexao, "select * from tb_usuario where id_usuario = '".$_SESSION['id']."';");
	$row = mysqli_fetch_array($sql);
?>
<div> <?php include "mensagens.php"; ?> </div>


<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar Senha</h3>
	 <form action="?page=atualiza_senha&id=<?php echo $row['id_usuario']; ?>" method="post">
	
	<div class="row"> 
		<div class="form-group col-md-3">
			<label for="nome">Nova Senha</label>
			<input type="password" class="form-control" name="senha1" >
		</div>
		<div class="form-group col-md-3">
			<label for="nome">Confirme a Nova Senha</label>
			<input type="password" class="form-control" name="senha2" >
		</div>
	</div>
	<div class="row"> 
		<div id="actions" class="row">
			<div class="col-md-12">
				<a href="?page=listar_perfil" class="btn btn-secondary">Voltar</a>
				<button type="submit" class="btn btn-primary">Salvar Alterações</button>
			</div>
		</div>
	</div>
</div>
</form>