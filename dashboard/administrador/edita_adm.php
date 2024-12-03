<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_administrador = (int) $_GET['id_usuario'];
	$sql = mysqli_query($conexao, "select * from tb_administrador where id_usuario= '".$id_administrador."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do administrador - <?php echo $id_administrador;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_adm&id_administrador=<?php echo $row['id_usuario']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome">Nome Completo</label>
			<input type="text" class="form-control" name="nome_administrador" value="<?php echo $row["nome_administrador"]; ?>">
		</div>
		<div class="form-group col-md-2">
			<label for="dt_nasc">Data Nascimento</label>
			<input type="text" class="form-control" name="nascimento" value="<?php echo date('d/m/Y',strtotime($row["dt_nascimento"])); ?>">
		</div>
		</div>
		<div class="row">
		<div class="form-group col-md-5">
				<label for="nome_administrador">Função</label>
				<input type="text" class="form-control" name="funcao_administrador" value="<?php echo $row["funcao_administrador"]; ?>">
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
			<input type="text" class="form-control rg-inputmask" id="rg-mask" name="rg" value="<?php echo $row["rg"]; ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="cpf">CPF</label>
			<input type="text" class="form-control cpf-inputmask" id="cpf-mask" name="cpf" value="<?php echo $row["cpf"]; ?>">
		</div>

	</div>
	<div class="row"> 
		<div class="form-group col-md-3">
			<label for="rg">E-Mail</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row["email"]; ?>">
		</div>
	 
		<div class="form-group col-md-3">
			<label for="cpf">Telefone</label>
			<input type="text" class="form-control phone-inputmask" id="phone-mask" name="telefone" value="<?php echo $row["telefone"]; ?>">
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
			<a href="?page=lista_adm" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>