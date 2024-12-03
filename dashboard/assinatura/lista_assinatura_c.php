<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  <div class="col-12">
			<?php include_once ('mensagens.php'); ?>

		  </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Histórico de Mensalidades</h5>
                  <div class="table-responsive">
                          
				  <?php
				$data = mysqli_query($conexao, "select * from tb_assinatura WHERE cod_igreja = '".$_SESSION['cod_igreja']."' order by dt_vencimento DESC;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table id='zero_config' class='table table-striped table-bordered'>";
				echo "<thead><tr>";
				echo "<th><strong>Código</strong></th>"; 
				echo "<th><strong>Vencimento</strong></th>";
				echo "<th><strong>Valor</strong></th>";
				echo "<th><strong>Status</strong></th>"; 
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_assinatura']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['dt_vencimento']))."</td>";
					echo "<td>".$info['valor']."</td>";
					echo "<td>"; if ($info['pagto'] == "1"){ echo "PAGO"; 
					    echo "<td></td>";
					} 
						else { echo "EM ABERTO</td>";
						echo "<td align='center'><a class='btn btn-success btn-xs' href=?page=efetuar_pagto&id_assinatura=".$info['id_assinatura']."&cod_igreja=".$info['cod_igreja'].">EFETUAR PAGAMENTO</a></td>";
					} 	
					echo "</td>";
					
				}
				echo "</tr></tbody></table>";
			?>    </div>
                </div>
              </div>
            </div>
          </div>
  
       

