<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Relatórios</h2>
		</div>


	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			  
					<div class="form-group col-md-2">
						<label for="cod_curso">Selecione o Relatório</label>
						<select class="form-control" name="link" id="" onchange="window.location.href=this.value;">";
							<option selected value="" target="_blank">Selecione</option>
							<?php $data = mysqli_query($conexao, "select * from tb_usuario WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
							echo "<option selected value='' target='_blank'>Selecione</option>      ";
							while($info2 = mysqli_fetch_array($data)){ 
							echo" 	
							<option value='relatorio/relatorio_evento.php?nome_evento=".$info2['nome_evento']."&id_evento=".$info2['id_evento']." target='_parent'>".$info2['nome_evento']."</option>";

							} ?>
						
					    </select>				
					</div>
					
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
 $(document).ready(function(){

    $('#link').on('change', function () {
         var url = $(this).val(); 
         if (url) { 
             window.open(url, '_blank');
          }
          return false;
        });
     });
</script>
