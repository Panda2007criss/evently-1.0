<?php include "data\conexao.php"; ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Equipamento</h2>
		</div>

	</div>
	<form action="?page=insere_equipamento" method="post">
		<!-- 1ª LINHA -->	
	
		     <div class="form-group col-md-5">
				<label for="nome_aluno">Descrição equipamento</label>
				<input type="text" class="form-control" name="nome">
			</div>
			
			
				
		<hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_equipamento" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
		</div>
	</form> 
</div>
