<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_membro = (int) $_GET['id_membro'];
	$sql = mysqli_query($conexao, "select * from tb_membro where id_membro = '".$id_membro."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Cadastrar Como Voluntário</h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=insere_voluntario" method="post">


	<!-- 1ª LINHA -->	
	<div class="row"> 
	    <div class="form-group col-md-1">
			<label for="nome">ID</label>
			<input type="text" class="form-control" name="id_membro" value="<?php echo $row["id_membro"]; ?> " readonly>
		</div>
	    <div class="form-group col-md-5">
			<label for="nome">Descrição</label>
			<input type="text" class="form-control" name="nome_voluntario" value="<?php echo $row["nome_membro"]; ?>">
		</div>
	</div>
</br>
	<div class="row"> 	
		<div class="form-group col-md-2" name="cor_funcao">
				<label for="cor_funcao">Habilitar nas Funções</label>
				
		    

			<?php
				$data = mysqli_query($conexao, "select * from tb_funcao WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				while($info = mysqli_fetch_array($data)){ 
                echo "
				<div class='form-group col-md-12'>
						<input class='form-check-input' type='checkbox' value='".$info['id_funcao']."' name='F_funcoes[]' id='flexCheckDefault'>
						<label class='form-check-label' for='flexCheckDefault'>
							".$info['descricao_funcao']."
						</label>
						</div>";
				};
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
			</form>