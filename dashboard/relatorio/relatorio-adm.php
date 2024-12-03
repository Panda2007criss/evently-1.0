<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Relatórios</h2>
		</div>

<?php $usuario = $_SESSION['usuario'];?>
	</div>
	<hr/>



	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
		<div class='form-group col-md-4'>
						<label for='cod_curso'>Relatórios Gerenciais</label>
						<select class='form-control' name="link" id="" onchange="window.location.href=this.value;">";
						   <option selected value="" target="_blank">Selecione</option>
						   <option value="relatorio/relatorio1.php?usuario=<?php echo $_SESSION['usuario']; ?>"   target="_blank">Clientes Ativos</option>
						   <option value="relatorio/relatorio2.php?usuario=<?php echo $_SESSION['usuario']; ?>" target="_blank">Clientes Inativos</option>
						   <option value="relatorio/relatorio3.php?usuario=<?php echo $_SESSION['usuario']; ?>" target="_blank">Clientes com Mensalidade Vencida</option>
					   </select>
                        			
					</div>
					
					
	</div>
</div>

</br><hr></br>

<form action="relatorio/relatorio_igreja.php" method="post">
<div id="list" class="row">
		<div class="table-responsive col-md-12">
			  
					<div class='form-group col-md-4'>
						<label for='cod_curso'>Registros por Igreja</label>
						<select class='form-control' name="cod_igreja">";   
						<?php $data2 = mysqli_query($conexao, "select * FROM tb_igreja;") or die(mysqli_error("ERRO: ".$conexao));
                              while($info2 = mysqli_fetch_array($data2)) { 
                               echo "<option value=".$info2['cod_igreja']." target='_parent'>".$info2['nome']."</option>";
                              }; ?>
					   </select>
					   </br>
					   <select class='form-control' name="tipo">";
						   <option value="1" target="_blank">Eventos</option>
						   <option value="2" target="_blank">Membros</option>
						   <option value="3" target="_blank">Funções</option>
						   <option value="4" target="_blank">Equipamentos</option>

					   </select>					
					</div>
					
	
	
	<div id="actions" class="row">
			<div class="col-md-12">
				<button type='submit' class='btn btn-primary'>Buscar</button>
				<input type='hidden' value='<?php echo $usuario; ?>' name='usuario'> 		
			</div>
		</div>
		<hr/>
</div>
</form>

                   

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
