<?php
    include_once "data\conexao.php";

	
	$sql = mysqli_query($conexao, "select * from tb_usuario where id_usuario = '".$_SESSION['id']."';");
	$row = mysqli_fetch_array($sql);
?>
<div> <?php include "mensagens.php"; ?> </div>

<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar Perfil</h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_foto-perfil&id=<?php echo $row['id_usuario']; ?>" method="post" enctype="multipart/form-data">
	<!-- 1ª LINHA -->	
	<div class="row"> 

                    <div class="p-5">
                      <img
                        src="assets/img/users/<?php echo $row['foto']; ?>" width="300px" height="350px"  />
                    </div>
					<div class="form-group col-md-3">
						<label for="nome">Nome</label>
						<input type="file" name="foto-perfil" class="form-control" name="nome" value="<?php echo $row["foto"]; ?>">
					</div>
		<div id="actions" class="row">
				<div class="col-md-12">
					<a href="?page=listar_perfil" class="btn btn-secondary">Voltar</a>
					<button type="submit" class="btn btn-primary">Alterar Foto</button>
					<input type="hidden" name="id" value="<?php echo $row['id_usuario'];?>">
				</div>
				</div>
    </div>
   </form> 
		<hr/>
		<div class="row"> 					
<form action="?page=atualiza_perfil&id=<?php echo $row['id_usuario']; ?>" method="post">
     <div class="form-group col-md-3">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $row["nome"]; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="nome">E-Mail</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row["email"]; ?>">
		</div>
	</div>
	
	
    <div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=listar_perfil" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
			<input type="hidden" name="id" value="<?php echo $row['id_usuario'];?>">
		</div>
	</div>
</div>  
</>  
</form> 
