<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_funcao = (int) $_GET['id_funcao'];
	$sql = mysqli_query($conexao, "select * from tb_funcao INNER JOIN tb_equipamento ON (tb_funcao.id_equipamento = tb_equipamento.id_equipamento) WHERE tb_funcao.id_funcao = '".$id_funcao."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Função</h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_funcao&id_funcao=<?php echo $row['id_funcao']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome">Função</label>
			<input type="text" class="form-control" name="descricao_funcao" value="<?php echo $row["descricao_funcao"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome">Cor</label>
		     <input type="color" class="form-control form-control-color" name="cor_funcao" value="<?php echo $row["cor_funcao"]; ?>">
		</div>
		
				<div class="form-group col-md-3" name="equipamento">
				<label for="equipamento">Equipamento</label>
				<select class="form-control" name="equipamento"> 
				<option name="equipamento" selected value="<?php echo $row["id_equipamento"]; ?>" ><?php echo $row["descricao_equipamento"]; ?></option>;
				<?php
				$data = mysqli_query($conexao, "select * from tb_equipamento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				while($info = mysqli_fetch_array($data)){ 
					echo"<option name='equipamento' value='".$info['id_equipamento']."'>".$info['descricao_equipamento']."</option>";
				}
				echo "</select>
		               </div>";
			?>
	</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_funcao" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>