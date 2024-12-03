<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_membro = (int) $_GET['id_membro'];
	$sql = mysqli_query($conexao, "select * from tb_membro where id_membro= '".$id_membro."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do membro - <?php echo $id_membro;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_cadastro-geral&id_membro=<?php echo $row['id_membro']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_membro" value="<?php echo $row["nome_membro"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="dt_nasc">Data Nascimento</label>
			<input type="text" class="form-control" name="nascimento" value="<?php echo date('d/m/Y',strtotime($row["dt_nascimento"])); ?>">
		</div>
		</div>
		<div class="row">
		<div class="form-group col-md-5">
				<label for="nome_Membro">Função na Igreja</label>
				<input type="text" class="form-control" name="funcao_membro">
			</div>
		<div class="form-group col-md-2">
			<label for="sexo">Sexo</label>
			<select class="form-control" name="sexo">
				<?php 
				if($row["sexo_aluno"]=="M") 
					echo '<option selected="selected" value="M">Masculino</option><option value="F">Feminino</option>'; 
				else 
					echo '<option value="M">Masculino</option><option selected="selected" value="F">Feminino</option>'; 
				?>
			</select>
		</div>
	</div>

	<!-- 3ª LINHA -->
	<div class="row">
	    
		<div class="form-group col-md-4">
			<label for="rg">RG</label>
			<input type="text" class="form-control" name="rg" value="<?php echo $row["rg"]; ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control" name="cpf" value="<?php echo $row["cpf"]; ?>">
		</div>

	</div>
	<div class="row"> 
		<div class="form-group col-md-3">
			<label for="rg">E-Mail</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row["email"]; ?>">
		</div>
	 
		<div class="form-group col-md-3">
			<label for="cpf">Telefone</label>
			<input type="text" class="form-control" name="telefone" value="<?php echo $row["telefone"]; ?>">
		</div>
	</div>

	<div class="row"> 
	<div class="form-group col-md-3">
			<label for="cpf">CEP</label>
			<input type="text" class="form-control" name="cep" value="<?php echo $row["cep"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="rg">Estado</label>
			<input type="text" class="form-control" name="estado" value="<?php echo $row["estado"]; ?>">
		</div>
	 
		<div class="form-group col-md-3">
			<label for="cpf">Cidade</label>
			<input type="text" class="form-control" name="cidade" value="<?php echo $row["cidade"]; ?>">
		</div>
	</div>
	<div class="row"> 
		<div class="form-group col-md-3">
			<label for="rg">Endereço</label>
			<input type="text" class="form-control" name="endereco" value="<?php echo $row["endereco"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="rg">Bairro</label>
			<input type="text" class="form-control" name="bairro" value="<?php echo $row["bairro"]; ?>">
		</div>
	 
		<div class="form-group col-md-3">
			<label for="cpf">Complemento</label>
			<input type="text" class="form-control" name="complemento" value="<?php echo $row["complemento"]; ?>">
		</div>
	</div>



	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_cadastro-geral" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>