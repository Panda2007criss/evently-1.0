<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$token = $_GET['token'];
	$id_evento = $_GET['id_evento'];
	$sql = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) where tb_escala.token = '".$token."' ;");
    $contador = mysqli_num_rows($sql); 
	
?>


<div id="main" class="container-fluid">

	<!-- Área de campos do formulário de edição-->

	<form action="?page=insere_escala" method="post">

	<!-- 1ª LINHA -->	
	<?php while($row = mysqli_fetch_array($sql)){   ?>
		<div class="row"> 
			<div class="form-group col-md-1">
				<label for="nome">ID</label>
				<input type="text" class="form-control" name="funcao[]" value="<?php echo $row["id_funcao"]; ?>"  readonly >
			</div>
			<div class="form-group col-md-4">
				<label for="nome">Função</label>
				<input type="text" class="form-control" name="descricao_funcao" value="<?php echo $row["descricao_funcao"]; ?>"  readonly >
			</div>
			
			<?php $data2 = mysqli_query($conexao, "select * from tb_membro INNER JOIN tb_habilitacao ON (tb_membro.id_membro = tb_habilitacao.id_membro) WHERE tb_habilitacao.id_funcao = '".$row["id_funcao"]."' AND tb_habilitacao.habilitacao = '1' ;") or die(mysqli_error("ERRO: ".$conexao)); ?>
            
			<div class="form-group col-md-4" name="id_membro[]">
                 <label for="cod_curso">Voluntário</label>
                <select class="form-control" name="id_membro[]">
                     <option name="id_membro[]" value="0">Deixar Vago</option>
						   <?php while($info2 = mysqli_fetch_array($data2)){ ?>
                                      <option name="id_membro[]" value="<?php echo $info2['id_membro']; ?>"><?php echo $info2['nome_membro']; ?></option>
                            <?php }; ?>
                    
                </select>
            </div>
			
			
                    
        
		<input type="hidden"  name="token" value="<?php echo $row["token"]; ?>"  readonly >	
		<input type="hidden"  name="id_evento" value="<?php echo $id_evento; ?>"  readonly >
		<input type="hidden"  name="id_contador" value="<?php echo $contador; ?>"  readonly >
		
        <?php } ?>     

	<hr/>

			<div id="actions" class="row">
				<div class="col-md-12">
					<a href="?page=lista_escala" class="btn btn-secondary">Voltar</a>
					<button type='submit' class='btn btn-primary'>Salvar Alterações</button>
							
				</div>
			</div>
</div>
</form>