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
                <div class="card-body">
                  <h5 class="card-title">Eventos como  voluntário</h5>
                  <div class="table-responsive">

                    <?php
                    $data = mysqli_query($conexao, "select * from tb_escala INNER JOIn tb_evento ON (tb_escala.id_evento = tb_evento.id_evento) INNER JOIN tb_funcao on (tb_escala.id_funcao = tb_funcao.id_funcao) WHERE tb_escala.id_membro = '".$id_membro."';") or die(mysqli_error("ERRO: ".$conexao));
                    echo "<table id='zero_config'
                    class='table table-striped table-bordered'>";
                    echo "<thead><tr>";
                    echo "<th><strong>ID</strong></th>"; 
                    echo "<th><strong>Evento</strong></th>"; 
                    echo "<th><strong>Data</strong></th>";
                    echo "<th><strong>Função</strong></th>";
                    echo "</tr></thead><tbody>";
                    while($info = mysqli_fetch_array($data)){ 
                      echo "<tr>";
                      echo "<td>".$info['id_evento']."</td>";
                      echo "<td>".$info['nome_evento']."</td>";
                      echo "<td>".date('d/m/Y',strtotime($info['data']))."</td>"; //Funções para converter formato da data do MySQL
                      echo "<td><span class='badge rounded-pill' style='background-color:".$info['cor_funcao']."'>".$info['descricao_funcao']."</span></td>";

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

       
