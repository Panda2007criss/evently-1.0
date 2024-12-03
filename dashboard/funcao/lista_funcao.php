<?php  include_once('data/conexao.php'); ?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
		  
            <div class="col-2">
			<a href="?page=cad_funcao" class="btn btn-primary pull-right h2">Cadastrar</a> 
			</div>
			<div class="col-12">
              <div class="card">
			   	 
			<div> <?php include "mensagens.php"; ?> </div>
                <div class="card-body">
                  <h5 class="card-title">Funções dos Voluntários</h5>
                  <div class="table-responsive">
 
				  <?php
				$data = mysqli_query($conexao, "select * from tb_funcao INNER JOIN tb_equipamento ON (tb_funcao.id_equipamento = tb_equipamento.id_equipamento) WHERE tb_funcao.cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<th><strong>Função</strong></th>"; 
				echo "<th><strong>Equip. Utilizado</strong></th>"; 
				echo "<th><strong>Cor</strong></th>"; 
				echo "<th class='actions d-flex justify-content-center'><strong>Ações</strong></th>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>" .$info['descricao_funcao']."</td>";
					echo "<td>" .$info['descricao_equipamento']."</td>";
					echo "<td><input type='color' name='cor_func' value='".$info['cor_funcao']."' disabled></td>";
					echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-warning btn-xs' href=?page=edita_funcao&id_funcao=".$info['id_funcao']."> Editar </a>"; 
					echo "<a href=?page=excluir_funcao&id_funcao=".$info['id_funcao']." class='btn btn-secondary btn-xs'> Excluir</a></td>";

			
				}
				echo "</tr></tbody></table>";
			?>	    </div>
                </div>
              </div>
            </div>
          </div>
  
       

