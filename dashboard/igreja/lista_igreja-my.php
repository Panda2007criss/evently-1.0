<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  <div class="col-md-2">
		    </div>
            <div class="col-12">
              <div class="card">
			 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
                  <h5 class="card-title">Dados da Igreja</h5>
                  <div class="table-responsive">

				  <?php
				$data = mysqli_query($conexao, "select * from tb_igreja WHERE cod_igreja = '".$_SESSION['cod_igreja']."' ;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table id='zero_config' class='table table-striped table-bordered'>";
				echo "<thead><tr>";
				echo "<th><strong>Código</strong></th>";
				echo "<th><strong>Nome</strong></th>";  
				echo "<th><strong>Denominação</strong></th>";
				echo "<th><strong>Descrição</strong></th>";
				echo "<th><strong>Capacidade</strong></th>";
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['cod_igreja']."</td>";
					echo "<td>".$info['nome']."</td>";
					echo "<td>".$info['denominacao']."</td>";
					echo "<td>".$info['descricao']."</td>";
					echo "<td>".$info['capacidade']."</td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_igreja-my&cod_igreja=".$info['cod_igreja']."> Detalhes </a>"; 
                    echo "<a class='btn btn-warning btn-xs' href=?page=edita_igreja-my&cod_igreja=".$info['cod_igreja']."> Editar </a>"; 
				}
				echo "</tr></tbody></table>";
			?>		    </div>
                </div>
              </div>
            </div>
          </div>
  
       

