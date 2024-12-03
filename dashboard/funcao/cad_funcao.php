<?php include "data\conexao.php"; ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Nova Função</h2>
		</div>

	</div>
	<form action="?page=insere_funcao" method="post">
		<!-- 1ª LINHA -->	
	
		     <div class="form-group col-md-5">
				<label for="nome_aluno">Descrição Função</label>
				<input type="text" class="form-control" name="descricao_funcao">
			</div>
			<div class="form-group col-md-5">
			<label for="nome">Cor</label>
		     <input type="color" class="form-control form-control-color" name="cor_funcao" value="">
		    </div>
			<?php
                    $data = mysqli_query($conexao, "select * from tb_equipamento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao)); ?>
                    <div class="form-group col-md-2" name="equipamento">
                    <label for="cod_curso">Equipamento</label>
                    <select class="form-control" name="equipamento">
                    <?php while($info = mysqli_fetch_array($data)){ ?>
                        <option name="equipamento" value="<?php echo $info['id_equipamento']; ?>"><?php echo $info['descricao_equipamento']; ?></option>
                        <?php }; ?>
                    
                    </select>
                        </div>
	
		<hr />
		
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_funcao" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
		</div>
	</form> 
</div>
