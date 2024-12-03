<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Administrador</h2>
		</div>


	</div>
	<form action="?page=insere_cliente-adm" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-md-5">
				<label for="nome_Administrador">Nome Completo</label>
				<input type="text" class="form-control" name="nome_completo">
			</div>
			<div class="form-group col-md-2">
				<label for="dt_nasc">Data Nascimento</label>
				<input type="date" class="form-control" name="dt_nasc">
			</div>
            <div class="form-group col-md-2">
				<label for="sexo">Sexo</label>
				<select class="form-control" name="sexo">
					<option> --------- </option>
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>
		</div>
		<div class="row">
		    <div class="form-group col-md-4">
				<label for="nome_Administrador">Função na Igreja</label>
				<input type="text" class="form-control" name="funcao_administrador">
			</div>
		   
			</div>
		<!-- 3ª LINHA -->
		<div class="row"> 
			<div class="form-group col-md-2">
				<label for="rg_Administrador">RG</label>
				<input type="text" class="form-control" name="rg">
			</div>
		 
			<div class="form-group col-md-2">
				<label for="cpf_Administrador">CPF</label>
				<input type="text" class="form-control" name="cpf">
			</div>
			<div class="form-group col-md-4">
				<label for="rg_Administrador">E-Mail</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="form-group col-md-3">
				<label for="cpf_Administrador">Telefone</label>
				<input type="text" class="form-control" name="telefone">
			</div>
            <div class='form-group col-md-2' name='tipo_assinatura'>";
				<label for='perfil'>Assinatura</label>";
				<select class='form-control' name='tipo_assinatura'></select>
					<option name='tipo_assinatura' value='1'>Período de Teste Grátis</option>
					<option name='tipo_assinatura' value='2'>Assinatura Mensal</option>
				</select>
		               </div>

		    </div>
		
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_adm" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
