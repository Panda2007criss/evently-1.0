<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Membro</h2>
		</div>


	</div>
	<form action="?page=insere_cadastro-geral" method="post" enctype="multipart/form-data">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="matricula">ID Membro</label>
				<input type="text" class="form-control" name="id_membro">
			</div>
			<div class="form-group col-md-5">
				<label for="nome_Membro">Nome Completo</label>
				<input type="text" class="form-control" name="nome_membro">
			</div>
			<div class="form-group col-md-3">
				<label for="dt_nasc">Data Nascimento</label>
				<input type="date" class="form-control" name="dt_nasc">
			</div>
			<div class="form-group col-md-3">
			  Selecione uma imagem: <input name="arquivo" type="file" />
			</div>
		</div>
		<div class="row">
		    <div class="form-group col-md-4">
				<label for="nome_Membro">Função na Igreja</label>
				<input type="text" class="form-control" name="funcao_membro">
			</div>
		
		<?php
				$data = mysqli_query($conexao, "select * from tb_perfil;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<div class='form-group col-md-3' name='perfil'>";
				echo "<label for='perfil'>Perfil de Acesso</label>";
				echo "<select class='form-control' name='perfil' ";

				while($info = mysqli_fetch_array($data)){ 
					echo"<option name='perfil' value='".$info['id']."'>".$info['perfil']."</option>";
				}
				echo "</select>
		               </div>";
			?>
		   <div class="form-group col-md-2">
				<label for="sexo">Sexo</label>
				<select class="form-control" name="sexo">
					<option> --------- </option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>
			</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="rg_Membro">RG</label>
				<input type="text" class="form-control" name="rg">
			</div>
		 
			<div class="form-group col-md-2">
				<label for="cpf_Membro">CPF</label>
				<input type="text" class="form-control" name="cpf">
			</div>
			<div class="form-group col-md-4">
				<label for="rg_Membro">E-Mail</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_Membro">Telefone</label>
				<input type="text" class="form-control" name="telefone">
			</div>
		</div>
		<div class="row"> 
			<div class="form-group col-md-3">
				<label for="cpf_Membro">CEP</label>
				<input type="text" class="form-control" name="cep">
			</div>
		</div>
		<div class="row"> 
			<div class="form-group col-md-3">
				<label for="cpf_Membro">Estado</label>
				<input type="text" class="form-control" name="estado">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_Membro">Cidade</label>
				<input type="text" class="form-control" name="cidade">
			</div>
		</div>
		<div class="row"> 
			<div class="form-group col-md-4">
				<label for="cpf_Membro">Endereço</label>
				<input type="text" class="form-control" name="endereco">
			</div>
		    <div class="form-group col-md-3">
			<label for="rg">Bairro</label>
			<input type="text" class="form-control" name="bairro">
		</div>
			<div class="form-group col-md-4">
				<label for="cpf_Membro">Complemento</label>
				<input type="text" class="form-control" name="complemento">
			</div>
		
		</div>	
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_cadastro-geral" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
