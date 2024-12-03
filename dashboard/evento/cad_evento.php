<?php include "data\conexao.php"; ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Cadastar Novo Evento</h2>
		</div>

	</div>
	<form action="?page=insere_evento" method="post" enctype="multipart/form-data">
		<!-- 1ª LINHA -->	
	
		<div class="form-group col-md-4">
				<label for="nome_aluno">Nome do Evento</label>
				<input type="text" class="form-control" name="nome_evento">
			</div>
		     <div class="form-group col-md-8">
				<label for="nome_aluno">Descrição do Evento</label>
				<input type="text" class="form-control" name="descricao">
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="formFile" class="form-label">Selecione o arquivo</label>
					<input class="form-control" type="file" id="formFile" name="arquivo">
				</div> 
			
			<div class="form-group col-md-3">
				<label for="dt_nasc">Data</label>
				<input type="date" class="form-control" name="data">
			</div>
			</div>
            <div class="row">
                    <div class="form-group col-md-3">
                        <label for="hora_inicio">Hora de Início</label>
                        <input type="time" class="form-control" name="hora_inicio" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="hora_inicio">Hora Apróximada do Término</label>
                        <input type="time" class="form-control" name="hora_fim" required>
                    </div>
            </div>
				
        	<hr />
            <h4> Selecione as Funções deste evento</h4>		
			<?php
				$data = mysqli_query($conexao, "select * from tb_funcao WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				while($info = mysqli_fetch_array($data)){ 
                echo "
				<div class='form-group col-md-12' name='funcao[]'>
						<input class='form-check-input' type='checkbox' value='".$info['id_funcao']."' name='funcao[]' id='flexCheckDefault'>
						<label class='form-check-label' for='flexCheckDefault'>
							".$info['descricao_funcao']."
						</label>
						</div>";
				};
				?>

	</div>
		<hr />

		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_evento" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
		</div>
	</form> 
</div>
