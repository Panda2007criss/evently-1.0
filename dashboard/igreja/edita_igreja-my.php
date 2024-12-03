<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$cod_igreja = (int) $_GET['cod_igreja'];
	$sql = mysqli_query($conexao, "select * from tb_igreja where cod_igreja = '".$cod_igreja."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro de Unidade  de Igreja- <?php echo $cod_igreja;?></h3>

	<!-- Área de campos do formulário de edição-->
	<form action="?page=atualiza_foto-igreja&id=<?php echo $row['cod_igreja']; ?>" method="post" enctype="multipart/form-data">
	<!-- 1ª LINHA -->	
	<div class="row"> 

                    <div class="p-5">
                      <img
                        src="assets/img/<?php echo $row['imagem']; ?>" width="200px" height="150px"  />
                    </div>
					<div class="form-group col-md-3">
						<label for="nome">Nome</label>
						<input type="file" name="foto-perfil" class="form-control" name="nome" value="<?php echo $row["imagem"]; ?>">
					</div>
		<div id="actions" class="row">
				<div class="col-md-12">
					<a href="?page=lista_igreja-my" class="btn btn-secondary">Voltar</a>
					<button type="submit" class="btn btn-primary">Alterar Foto</button>
					<input type="hidden" name="id" value="<?php echo $row['cod_igreja'];?>">
				</div>
				</div>
    </div>
   </form>
	<form action="?page=atualiza_igreja-my&cod_igreja=<?php echo $row['cod_igreja']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
	<div class="form-group col-md-4">
			<label for="nome">Nome</label>
			<input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>" >
		</div>
		<div class="form-group col-md-4">
			<label for="nome">Denominacao</label>
			<input type="text" class="form-control" name="denominacao" value="<?php echo $row["denominacao"]; ?>">
		</div>
	</div>
    <div class="row">
        <div class="form-group col-md-4">
                <label for="nome">Descricao</label>
                <input type="text" class="form-control" name="descricao" value="<?php echo $row['descricao']; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Hierarquia</label>
                <input type="text" class="form-control" name="hierarquia" value="<?php echo $row["hierarquia"]; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Telefone</label>
                <input type="text" class="form-control phone-inputmask" name="telefone" id="phone-mask" value="<?php echo $row["telefone"]; ?>">
            </div>
    </div>

    
	<div class="row">
        <div class="form-group col-md-4">
                <label for="nome">Capacidade</label>
                <input type="text" class="form-control" name="capacidade" value="<?php echo $row['capacidade']; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Cep</label>
                <input type="text" class="form-control cep-inputmask" name="cep" id="cep-mask"  value="<?php echo $row["cep"]; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Estado</label>
                <input type="text" class="form-control" name="estado" value="<?php echo $row["estado"]; ?>">
            </div>
    
    </div><div class="row">
        <div class="form-group col-md-4">
                <label for="nome">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $row["endereco"]; ?>" >
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Complemento</label>
                <input type="text" class="form-control" name="complemento" value="<?php echo $row["complemento"]; ?>" >
            </div>
        </div>
    
    
</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_igreja-my" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>