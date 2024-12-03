<?php  include_once('data/conexao.php'); 
$data = mysqli_query($conexao, "select id_membro from tb_membro WHERE id_usuario = '".$_SESSION['id']."'  ;") or die(mysqli_error("ERRO: ".$conexao));
while($info = mysqli_fetch_array($data)){ 
	$id_membro = $info['id_membro'];
}
?>
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
			  <?php include "mensagens.php"; ?>
                <div class="card-body">
                  <h5 class="card-title">Eventos</h5>
                  <div class="table-responsive">

				  <?php
				$data = mysqli_query($conexao, "select * from tb_evento WHERE cod_igreja = '".$_SESSION['cod_igreja']."'  ;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table id='zero_config' class='table table-striped table-bordered'>";
				echo "<thead><tr>";
				echo "<th><strong>Nome</strong></th>"; 
				echo "<th><strong>Descrição</strong></th>"; 
				echo "<th><strong>Data</strong></th>";
				echo "<th><strong>Hora Início / Término</strong></th>"; 
				echo "<th><strong>Minha Função</strong></th>";
				echo "<th><strong>Ações</strong></th>";
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['nome_evento']."</td>";
					echo "<td>".$info['descricao_evento']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['data']))."</td>";
					echo "<td>".date('H:i', strtotime($info['hora_inicio']))." / ".date('H:i', strtotime($info['hora_fim'])). "</td>";
					   $data2 = mysqli_query($conexao, "select * from tb_escala inner JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) WHERE  id_evento = '".$info['id_evento']."' and id_membro = '".$id_membro."'  ;") or die(mysqli_error("ERRO: ".$conexao));
					   $cont = mysqli_num_rows($data2);

					   $data3 = mysqli_query($conexao, "select * from tb_escala WHERE id_evento = '".$info['id_evento']."' and id_membro = '0';") or die(mysqli_error("ERRO: ".$conexao));
					   $contVazio = mysqli_num_rows($data3);

							     if ($cont == '0'){
								    echo "<td></td>";

									    if ($contVazio == '0'){
										   echo "<td><a href='' class='btn btn-info btn-xs'>ESGOTADO</a></td>";
									    } else {
                                           echo "<td><a href=?page=cadastrar_escala-funcao&id_evento=".$info['id_evento']."&id_membro=".$id_membro." class='btn btn-success btn-xs'>Candidatar</a></td>";
										}
							    } else {
								 while($info2 = mysqli_fetch_array($data2)){ 
									 echo "<td>".$info2['descricao_funcao']."</td>";
									 echo "<td><a href=?page=cancelar_funcao&id_escala=".$info2['id_escala']." class='btn btn-secondary btn-xs'>Cancelar</a></td>";
								}
							 }
						
					   
					}
					
					
	
				
				echo "</tr></tbody></table>";
			?>	
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        

        </>

       
