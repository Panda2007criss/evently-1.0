<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  
            <div class="col-2">
			<a href="?page=cad_evento" class="btn btn-primary pull-right h2">Cadastrar</a> 
			</div>
			<div class="col-12">
              <div class="card">
			   	 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
				<div class='form-group col-md-2'>
						<label for='cod_curso'>Mês</label>
						<select class='form-control' name="link" id="" onchange="window.location.href=this.value;">";
						   <option selected value="" target="_blank">Selecione</option>
						   <option  value="?page=lista_evento&v=todos" target="_blank">Todos</option>
						   <option  value="?page=lista_evento&v=atual" target="_blank">Atual</option>
					   </select>				
					</div>
                  <h5 class="card-title">Eventos</h5>
                  <div class="table-responsive">
 
				  <?php
             
			if(isset($_GET['v']) && ($_GET['v']) == 'todos'){ 
				$data = mysqli_query($conexao, "select * from tb_evento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
			} else if (isset($_GET['v']) && ($_GET['v']) == 'atual')  {
			   $mes = date('m');
			   $data = mysqli_query($conexao, "select * from tb_evento WHERE (MONTH(data) = '".$mes."') AND  cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
		    }  else {
				
				$data = mysqli_query($conexao, "select * from tb_evento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
			}
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th><strong>Nome</strong></th>"; 
				echo "<th><strong>Descrição</strong></th>"; 
				echo "<th><strong>Data</strong></th>";
				echo "<th><strong>Início/Término</strong></th>"; 
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 

					$data2 = mysqli_query($conexao, "select * from tb_escala WHERE id_evento = '".$info['id_evento']."' AND cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
					$contagem = mysqli_num_rows($data2);

					echo "<tr>";
					echo "<td>".$info['nome_evento']."</td>";
					echo "<td>".$info['descricao_evento']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['data']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td>".$info['hora_inicio']." / ".$info['hora_fim']. "</td>";

					if ($info['status'] == '1'){
						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
						echo "<a class='btn btn-info btn-xs' href=?page=view_evento&id_evento=".$info['id_evento'].">VISUALIZAR</a>";
						echo "<a class='btn btn-warning btn-xs' href=?page=edita_evento&id_evento=".$info['id_evento'].">EDITAR</a>"; 					 
						echo "<a href=?page=excluir_evento&id_evento=".$info['id_evento']." class='btn btn-secondary btn-xs'>CANCELAR</a></td>";
					} else {
						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
						echo "<span class='badge rounded-pill' style='background-color:#e01a1a'>CANCELADO</span>";
					}
					
				}
				echo "</tr></tbody></table>";
			?>			    </div>
                </div>
              </div>
            </div>
          </div>
  
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

