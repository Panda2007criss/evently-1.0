<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_evento = (int) $_GET['id_evento'];
	$data = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) INNER JOIN tb_membro ON (tb_escala.id_membro = tb_membro.id_membro) where id_evento = '".$id_evento."';");

?>
<div id="main" class="container-fluid">

	<!-- Área de campos do formulário de edição-->

	<form action="" method="post">

	<!-- 1ª LINHA -->	
	<?php while($info = mysqli_fetch_array($data)){ ?>
	<div class="row"> 
		<div class="form-group col-md-4">
			<label for="nome">Função</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $info["descricao_funcao"]; ?>" readonly>
		</div>
		<div class="form-group col-md-4">
			<label for="nome">Voluntário</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $info["nome_membro"]; ?>" readonly>
		</div>
	</div>

	<?php }; ?>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_escala" class="btn btn-secondary">Voltar</a>
		</div>
	</div>
</div>