<?php  include_once('data/conexao.php'); 

$data1 = mysqli_query($conexao, "select  * from tb_igreja WHERE ativo = '1';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount1 = mysqli_num_rows($data1);

$data2 = mysqli_query($conexao, "select  * from tb_membro WHERE status = '1';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount2 = mysqli_num_rows($data2);

$data3 = mysqli_query($conexao, "select  * from tb_evento WHERE status = '1';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount3 = mysqli_num_rows($data3);

?>
  <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
          <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
              <a href="?page=lista_adm">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-account-multiple-outline"></i>
                  </h1>
                  <h6 class="text-white">Administradores</h6>
                </div>
               </a> 
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
              <a href="?page=lista_igreja">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-account-circle"></i>
                  </h1>
                  <h6 class="text-white">Clientes</h6>
                </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
              <a href="?page=lista_assinatura">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-cash-usd"></i>
                  </h1>
                  <h6 class="text-white">Assinaturas</h6>
                </div>
                </a>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <a href="?page=lista_relatorio-adm">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Relatórios</h6>
                </div>
                </a>
              </div>
            </div>
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
                        <div class="col-4 mt-6">                       
                          <div class="bg-dark p-10 text-white text-center">                         
                            <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount1; ?></h5>
                            <small class="font-light">Total Clientes</small>
                          </div>                      
                        </div>
                        <div class="col-4 mt-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-plus fs-3 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount2; ?></h5>
                            <small class="font-light">Total de Usuários</small>
                          </div>
                        </div>
                        <div class="col-4 mt-6">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount3; ?></h5>
                            <small class="font-light">Total de Eventos</small>
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