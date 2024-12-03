<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_evento = (int) $_GET['id_evento'];
	$sql = mysqli_query($conexao, "select * from tb_evento where id_evento = '".$id_evento."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar Evento</h3>

	<!-- Área de campos do formulário de edição-->
	<form action="?page=atualiza_flyer&id=<?php echo $row['id_evento']; ?>" method="post" enctype="multipart/form-data">
	<!-- 1ª LINHA -->	
	<div class="row"> 

                    <div class="p-5">
                      <img
                        src="assets/img/eventos/<?php echo $row['imagem']; ?>" width="200px" height="250px"  />
                    </div>
					<div class="form-group col-md-3">
						<label for="nome">Nome</label>
						<input type="file" name="flyer" class="form-control"  value="<?php echo $row["imagem"]; ?>">
					</div>
		<div id="actions" class="row">
				<div class="col-md-12">
					<a href="?page=lista_evento" class="btn btn-secondary">Voltar</a>
					<button type="submit" class="btn btn-primary">Alterar FLYER</button>
					<input type="hidden" name="id_evento" value="<?php echo $row['id_evento'];?>">
				</div>
				</div>
    </div>
</form>
<hr/>


	<form action="?page=atualiza_evento&id_evento=<?php echo $row['id_evento']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-5">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome_evento" value="<?php echo $row["nome_evento"]; ?>">
		</div>
	</div>
	<div class="form-group col-md-9">
				<label for="nome_aluno">Descrição do Evento</label>
				<input type="text" class="form-control" name="descricao_evento" value="<?php echo $row["descricao_evento"]; ?>">
			</div>
			<!--
			<div class="mb-2">
            <label for="formFile" class="form-label">Selecione o arquivo</label>
            <input class="form-control" type="file" id="formFile" name="imagem">
            </div> -->
			<div class="form-group col-md-3">
				<label for="dt_nasc">Data</label>
				<input type="date" class="form-control" name="data" value="<?php echo $row["data"]; ?>">
			</div>
            <div class="row">
                    <div class="form-group col-md-3">
                        <label for="hora_inicio">Hora de Início</label>
                        <input type="time" id="appt" class="form-control" name="hora_inicio" value="<?php echo $row["hora_inicio"]; ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="hora_inicio">Hora Apróximada do Término</label>
                        <input type="time" id="appt" class="form-control" name="hora_fim" value="<?php echo $row["hora_fim"]; ?>">
                    </div>
            </div>



	<input type="hidden" name="id_evento" value="<?php echo $id_evento; ?>"/>
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_evento" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>
</form>