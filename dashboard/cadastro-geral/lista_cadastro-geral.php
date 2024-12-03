<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  
            <div class="col-2">
			<a href="?page=cad_cadastro-geral" class="btn btn-primary pull-right h2">Cadastrar</a>
			</div>
			<div class="col-12">
              <div class="card">
			   	 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
                  <h5 class="card-title">Membros</h5>
                  <div class="table-responsive">

				  <?php
				$data = mysqli_query($conexao, "select * from tb_membro INNER jOIN tb_perfil ON (tb_membro.perfil = tb_perfil.id) WHERE tb_membro.cod_igreja = '".$_SESSION['cod_igreja']."' order by tb_membro.id_usuario") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table id='zero_config'
				class='table table-striped table-bordered'>";
				echo "<thead><tr>";
				echo "<th></th>";
				echo "<th><strong>Nome</strong></th>"; 
				echo "<th><strong>Função</strong></th>";
				echo "<th><strong>Perfil</strong></th>";
				echo "<th><strong>E-Mail</strong></th>";
				echo "<th><strong>Telefone</strong></th>"; 
				echo "<th><strong>Nascimento</strong></th>";
				echo "<th><strong>Voluntário</strong></th>";
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td><img
                    src='assets/img/users/".$info['foto']."'
                    alt='user'
                    class='rounded-circle'
                    width='41'
                  /></td>";
					echo "<td>".$info['nome_membro']."</td>";
					echo "<td>".$info['funcao_membro']."</td>";
					echo "<td>".$info['perfil']."</td>";
					echo "<td>".$info['email']."</td>";
					echo "<td>".$info['telefone']."</td>";
					echo "<td>".date('d/m/Y',strtotime($info['dt_nascimento']))."</td>"; //Funções para converter formato da data do MySQL
					if ($info['voluntario']  == '1'){
					    echo "<td><a class='btn btn-success btn-xs' href=?page=excluir_voluntario&id_membro=".$info['id_membro']." >SIM</a></td>";
					}else {
						echo "<td><a class='btn btn-danger btn-xs' href=?page=cad_voluntario&id_membro=".$info['id_membro']." >NÃO</a></td>";
					}
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-warning btn-xs' href=?page=edita_cadastro-geral&id_membro=".$info['id_membro'].">Editar</a>"; 
					echo "<a class='btn btn-info btn-xs' href=?page=view_cadastro-gerall&id_membro=".$info['id_membro']." >Detalhes</a>";
					echo "<a class='btn btn-secondary btn-xs' href=?page=excluir_cadastro-geral&id_membro=".$info['id_membro'].">Excluir</a></td>";

				}
				echo "</tr></tbody></table>";
			?>		    </div>
                </div>
              </div>
            </div>
          </div>
  
       

