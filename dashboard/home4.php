<?php  include_once('data/conexao.php'); 


$data1 = mysqli_query($conexao, "select  * from tb_membro WHERE id_usuario = '".$_SESSION['id']."';") or die(mysqli_error("ERRO: ".$conexao));
while($info = mysqli_fetch_array($data1)){ 
    $id = $info['id_membro'];
}


$data2 = mysqli_query($conexao, "select  * from tb_escala WHERE id_membro = '".$id."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount2 = mysqli_num_rows($data2);

$data3 = mysqli_query($conexao, "select  * from tb_evento WHERE status = '1' AND cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount3 = mysqli_num_rows($data3);

?>
  <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="?page=lista_evento_vlt">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                  <i class="mdi mdi-unity"></i>
                  </h1>
                  <h6 class="text-white">Eventos</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="row">
                      <div class="col-6 mt-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount3; ?></h5>
                            <small class="font-light">Total de Eventos</small>
                          </div>
                        </div>
                        <div class="col-6 mt-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-plus fs-3 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount2; ?></h5>
                            <small class="font-light">Minha Escalas</small>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- Recent comment and chats -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->