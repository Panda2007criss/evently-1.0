<?php  include_once('data/conexao.php'); 
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$data1 = mysqli_query($conexao, "select  * from tb_evento WHERE data < '".$data."' AND cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
$registrocount1 = mysqli_num_rows($data1); ?>
<div class="row el-element-overlay">
<?php while($info = mysqli_fetch_array($data1)){ ?>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="el-card-item">
                  <div class="el-card-avatar el-overlay-1">
                 
                    <img src="assets/img/eventos/<?php echo $info['imagem']; ?>" width="250px" height="100px" alt="user" />
                    <div class="el-overlay">
                      <ul class="list-style-none el-info">
                        <li class="el-item">
                          <a
                            class="
                              btn
                              default
                              btn-outline
                              image-popup-vertical-fit
                              el-link
                            "
                            href="#"
                            ><i class="mdi mdi-magnify-plus"></i
                          ></a>
                        </li>
                        <li class="el-item">
                          <a
                            class="btn default btn-outline el-link"
                            href="javascript:void(0);"
                            ><i class="mdi mdi-link"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                  <div class="el-card-content">
                    <span class="text-muted"><?php echo $info['nome_evento']; ?></span>
                    <h4 class="mb-2"><?php echo $info['descricao_evento']; ?></h4>
                    <h4 class="mb-2"><?php echo date('d/m/Y',strtotime($info['data'])); ?> às <?php echo date('H:i',strtotime($info['hora_inicio'])); ?>H</h4>
                  </div>
                  <div class="comment-widgets scrollable">
                  <!-- Comment Row -->

                  
                </div>
              </div>
            </div>
           </div>
           <?php } ?>
</div>

          