<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Assinaturas</h5>
                  <div class="table-responsive">

				  <?php
				$data = mysqli_query($conexao, "select * from tb_igreja;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table id='zero_config' class='table table-striped table-bordered'>";
				echo "<thead><tr>";
				echo "<th><strong>Código</strong></th>"; 
				echo "<th><strong>Nome</strong></th>"; 
				echo "<th><strong>Descrição</strong></th>";
				echo "<th><strong>Status</strong></th>";
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['cod_igreja']."</td>";
					echo "<td>".$info['nome']."</td>";
					echo "<td>".$info['descricao']."</td>";
					echo "<td>"; if ($info['ativo'] == "1"){ echo "ATIVO"; } else { echo "INATIVO";} 	
					echo "</td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-info btn-xs' href=?page=lista_pagamento&cod_igreja=".$info['cod_igreja']."> PAGAMENTOS</a>";
				}
				echo "</tr></tbody></table>";
			?>    </div>
                </div>
              </div>
            </div>
          </div>
  
       

