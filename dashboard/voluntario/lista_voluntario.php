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
                  <h5 class="card-title">Voluntários</h5>
                  <div class="table-responsive">
 
				 <?php
				$data = mysqli_query($conexao, "select * from tb_membro WHERE  voluntario = '1' AND cod_igreja = '".$_SESSION['cod_igreja']."' ;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th></th>";
				echo "<th><strong>Voluntário</strong></th>"; 
				echo "<th><strong>Habilitações</strong></th>"; 
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td><img
                    src='assets/img/users/".$info['foto']."'
                    alt='user'
                    class='rounded-circle'
                    width='41'
                  /></td>";
					echo "<td>"  .$info['nome_membro']."</td><td>";
					         $membro =  $info['id_membro'];   

							 $data2 = mysqli_query($conexao, "select * from tb_habilitacao INNER JOIN tb_funcao ON(tb_habilitacao.Id_funcao = tb_funcao.id_funcao) where tb_habilitacao.id_membro = '".$membro."' AND tb_habilitacao.habilitacao = '1' ") or die(mysqli_error("ERRO: ".$conexao));

							 while($info2 = mysqli_fetch_array($data2)){
								 echo "<span class='badge rounded-pill' style='background-color:".$info2['cor_funcao']."'>".$info2['descricao_funcao']."</span>";

							 }

					    
 
					
					echo "</td><td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-warning btn-xs' href=?page=edita_voluntario&id_membro=".$info['id_membro']."> Editar </a>"; 
					echo "<a href=?page=excluir_voluntario&id_membro=".$info['id_membro']." class='btn btn-danger btn-xs'> Suspender </a></td>";

			
				}
				echo "</tr></tbody></table>";
			?>		    </div>
                </div>
              </div>
            </div>
          </div>
  
       

