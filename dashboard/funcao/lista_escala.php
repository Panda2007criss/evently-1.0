<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  
            <div class="col-2">
			</div>
			<div class="col-12">
              <div class="card">
			   	 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
	
                  <h5 class="card-title">Escala</h5>
                  <div class="table-responsive">
 
				  <?php
				$data = mysqli_query($conexao, "select * from  tb_evento WHERE cod_igreja = '".$_SESSION['cod_igreja']."' AND status = '1';") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th><strong>ID</strong></th>"; 
				echo "<th><strong>Evento</strong></th>"; 
				echo "<th><strong>Data</strong></th>";
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_evento']."</td>";
					echo "<td>".$info['nome_evento']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['data']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					
					$data2 = mysqli_query($conexao, "select * from tb_escala WHERE id_evento='".$info['id_evento']."' ;") or die(mysqli_error("ERRO: ".$conexao));
					$contagem = mysqli_num_rows($data2);
					if ($contagem == '0'){
						echo "<a class='btn btn-success btn-xs' href=?page=cad_escala&id_evento=".$info['id_evento']."&token=".$info['token'].">CADASTRAR</a>";
					}else{
						echo "<a class='btn btn-info btn-xs' href=?page=view_escala&id_evento=".$info['id_evento']."> VER ESCALA </a>";
					    echo "<a class='btn btn-warning btn-xs' href=?page=edita_escala&id_evento=".$info['id_evento']."> EDITAR </a>";
	
					}
					
					
				}
				echo "</tr></tbody></table>";
			?>		    </div>
                </div>
              </div>
            </div>
          </div>
  

