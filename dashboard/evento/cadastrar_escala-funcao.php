<?php include "data\conexao.php"; 
$id_evento = $_GET['id_evento'];
$id_membro = $_GET['id_membro'];

$sql = mysqli_query($conexao, "select * from tb_evento where id_evento = '".$id_evento."';");
while($info = mysqli_fetch_array($sql)){
	$nome_evento = $info['nome_evento'];
}
?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Candidatar a ser voluntário</h2>
		</div>

	</div>
	<form action="?page=inserir_na-escala" method="post" >
		<!-- 1ª LINHA -->	
	
		    <div class="form-group col-md-5">
				<label for="nome_aluno">Nome do Evento</label>
				<input type="text" class="form-control" name="nome" value="<?php echo $nome_evento; ?>" disabled>
				<input type="hidden" name="id_evento" value="<?php echo $id_evento; ?>" >
			</div>

			<?php

			$data4 = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_habilitacao ON (tb_escala.id_funcao = tb_habilitacao.id_funcao)  INNER JOIN tb_funcao ON (tb_habilitacao.id_funcao = tb_funcao.id_funcao) WHERE  (tb_escala.id_evento = '".$id_evento."' AND tb_escala.id_membro = '0' AND tb_habilitacao.id_membro = '".$id_membro."'  AND tb_habilitacao.habilitacao = '1');") or die(mysqli_error("ERRO: ".$conexao));
			$contarreg = mysqli_num_rows($data4);
			if ($contarreg == '0'){
				echo "<h4>VOCÊ NÃO POSSUI HABILITAÇÃO PARA AS VAGAS EM ABERTO</h4>";
			}else{

				echo "<div class='form-group col-md-3' name='id_funcao'>";
				echo "<label for='id_funcao'>Função</label>";
				echo "<select class='form-control' name='id_funcao'> ";

				while($info4 = mysqli_fetch_array($data4)){ 
					echo"<option name='id_funcao' value='".$info4['id_funcao']."'>".$info4['descricao_funcao']."</option>";
				}
				echo "</select> </div>";

			  echo "<div id=actions' class='row'>
			  <div class='col-md-12'>
			   <hr />
				  <button type='submit' class='btn btn-primary'>Salvar</button>
				  <a href='?page=lista_evento_vlt' class='btn btn-danger'>Cancelar</a>
				  <input type='hidden' name='id_membro' value='".$id_membro."'>
			  </div>
		  </div>
			  ";
			}


			
			?> 
		<hr /> 
		
		</div>
	</form> 
</div>
