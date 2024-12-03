<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  <div class="col-md-2">
		  <a href="?page=cad_adm" class="btn btn-primary pull-right h2">Cadastrar</a>  
		    </div>
            <div class="col-12">
              <div class="card">
			 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
                  <h5 class="card-title">Administradores</h5>
                  <div class="table-responsive">

				  <?php
				$data = mysqli_query($conexao, "select * from tb_administrador order by id_usuario") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th><strong>Nome</strong></th>"; 
				echo "<th><strong>Função</strong></th>";
				echo "<th><strong>E-Mail</strong></th>";
				echo "<th><strong>Telefone</strong></th>"; 
				echo "<th><strong>Nascimento</strong></th>";
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['nome_administrador']."</td>";
					echo "<td>".$info['funcao_administrador']."</td>";
					echo "<td>".$info['email']."</td>";
					echo "<td>".$info['telefone']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['dt_nascimento']))."</td>"; //Funções para converter formato da data do MySQL
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-info btn-xs' href=?page=view_adm&id_usuario=".$info['id_usuario']." > Detalhes </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=edita_adm&id_usuario=".$info['id_usuario']."> Editar </a>"; 
					echo "<a class='btn btn-secondary btn-xs' href=?page=excluir_adm&id_usuario=".$info['id_usuario'].">Excluir</a></td>";

				}
				echo "</tr></tbody></table>";
			?>		    </div>
                </div>
              </div>
            </div>
          </div>
  
       

