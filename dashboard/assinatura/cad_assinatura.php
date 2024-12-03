<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_evento = (int) $_GET['id_evento'];
	$sql = mysqli_query($conexao, "select * from tb_evento where id_evento = '".$id_evento."';");
	$row = mysqli_fetch_array($sql);
?>


<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Escala do Evento</h2>
		</div>


	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

			<?php
			  

				$data = mysqli_query($conexao, "select * from tb_funcao WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				$count = mysqli_num_rows($data);
 
				echo "<form action='?page=insere_escala' method='post'>";
					
					$i = 1;
				        while($info = mysqli_fetch_array($data)){ 
						  	
						  $id     =  $info['id_funcao'];
                          echo "<div class='row'>"; 
						  echo " 
						    <div class='form-group col-md-1'>
								<input type='hidden' class='form-control' name='funcao[]'  value=".$info['id_funcao']."  readonly> 
							</div>
							<div class='form-group col-md-3'>
								<label for='nome'>Função</label>
								<input type='text' class='form-control' name='descricao_funcao'  value=".$info['descricao_funcao']."  readonly> 
							</div>";

						  $i = $i + 1;
						  $data2 = mysqli_query($conexao, "select * from tb_membro INNER JOIN  tb_habilitacao ON (tb_membro.id_membro = tb_habilitacao.id_membro) WHERE tb_habilitacao.id_funcao = '".$id."' AND tb_membro.voluntario = '1' AND tb_habilitacao.habilitacao = '1' ;") or die(mysqli_error("ERRO: ".$conexao));

						  echo "<div class='form-group col-md-4' name='id_membro[]'>";
						  echo "<label for='id_membro'>Voluntário</label>";
						  echo "<select class='form-control' name='id_membro[]'>";
						  while($info2 = mysqli_fetch_array($data2)){ 
						  echo"<option name='id_membro[]' value='".$info2['id_membro']."'>".$info2['nome_membro']."</option>";
						  }
						  echo "</select></div></div>";
								
				}  
                
				echo "<hr/>

				<div id='actions' class='row'>
				<div class='col-md-12'>
					<a href='?page=lista_equipamento' class='btn btn-secondary'>Voltar</a>
					<button type='submit' class='btn btn-primary'>Salvar Alterações</button>
					<input type='hidden' name='id_evento' value=".$id_evento.">
					<input type='hidden' name='cont' value=".$count.">
				</div>
			</div>
		</div>
	</div>";
				
				


			?>	
			
			
		</div>
	</div>
</div>

