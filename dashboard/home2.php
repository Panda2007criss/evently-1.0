<?php  include_once('data/conexao.php'); 

$data1 = mysqli_query($conexao, "select  * from tb_membro WHERE status = '1' AND voluntario = '1' AND cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount1 = mysqli_num_rows($data1);

$data2 = mysqli_query($conexao, "select  * from tb_funcao WHERE   cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount2 = mysqli_num_rows($data2);

$data3 = mysqli_query($conexao, "select  * from tb_evento WHERE status = '1' AND cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount3 = mysqli_num_rows($data3);

?>
 <!-- ============================================================== -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-lg-2 col-xlg-3">
            <a href="?page=lista_voluntario">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-account-switch"></i>
                  </h1>
                  <h6 class="text-white">Voluntários</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="?page=lista_funcao">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-tie"></i>
                  </h1>
                  <h6 class="text-white">Funções</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <a href="?page=lista_quadro-disponibilidade">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-quilt"></i>
                  </h1>
                  <h6 class="text-white">Disponibilidade</h6>
                </div>
              </div>
              </a>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <a href="?page=lista_evento">
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
                        <div class="col-4 mt-3">                       
                          <div class="bg-dark p-10 text-white text-center">                         
                            <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount1; ?></h5>
                            <small class="font-light">Total Voluntários</small>
                          </div>                      
                        </div>
                        <div class="col-4 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-plus fs-3 font-16"></i>
                            <h5 class="mb-0 mt-1"><?php echo $registrocount2; ?></h5>
                            <small class="font-light">Total de Funções</small>
                          </div>
                        </div>
                        <div class="col-4 mt-3">
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

            <div class="row">
            <div class="col-md-12 sm-12 lg-12">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 sm-12 lg-12">
                      <div class="row">
                        <div class="col-12 sm-12 lg-12 mt-3">                       
                        
                          <div align="center"><img src="assets/img/programacao-eventos.png" width="400px" height="70px" /></div>
                         
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                  </div>
              </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-proximo-tab" data-bs-toggle="tab" data-bs-target="#nav-proximo" type="button" role="tab" aria-controls="nav-proximo" aria-selected="true">PRÓXIMOS</button>
                    <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">TODOS</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">PASSADOS</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">CANCELADOS</button>
                </div>
            </nav>
                <div class="tab-content" id="nav-tabContent">
                             <div class="tab-pane fade show active" id="nav-proximo" role="tabpanel" aria-labelledby="nav-proximo-tab">
                              <div class="p-20">                                       
                                    <?php include_once('proximos.php');?>
                              </div>
                            </div>
                           <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="p-20">                                      
                                    <?php include_once('todos.php');?>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div class="p-20">
                                  <p>
                                  <?php include_once('passados.php');?>
                                  </p>
                              </div>
                            </div> 
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <div class="p-20">
                                  <p>
                                  <?php include_once('cancelados.php');?>
                                  </p>
                              </div>
                          </div>
              </div>
        </div>