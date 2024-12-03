<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  
            <div class="col-2">
			<a href="?page=cad_equipamento" class="btn btn-primary pull-right h2">Cadastrar</a> 
			</div>
			<div class="col-12">
              <div class="card">
			   	 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
                  <h5 class="card-title">Equipamentos</h5>
                  <div class="table-responsive">
 
				  <?php
				$data = mysqli_query($conexao, "select * from tb_equipamento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th><strong>ID</strong></th>"; 
				echo "<th><strong>Descrição</strong></th>"; 
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_equipamento']."</td>";
					echo "<td>".$info['descricao_equipamento']."</td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-info btn-xs' href=?page=edita_equipamento&id_equipamento=".$info['id_equipamento']."> EDITAR</a>"; 
					echo "<a href=?page=excluir_equipamento&id_equipamento=".$info['id_equipamento']." class='btn btn-secondary btn-xs'> EXCLUIR </a></td></tr>";
				}
				echo "</tbody></table>";
			?>				    </div>
                </div>
              </div>
            </div>
          </div>
  
       

