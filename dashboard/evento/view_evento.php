
                <div class="tab-content" id="nav-tabContent">
                             <div class="tab-pane fade show active" id="nav-proximo" role="tabpanel" aria-labelledby="nav-proximo-tab">
                              <div class="p-20">                                       
							  <?php  include_once('data/conexao.php'); 

                $id_evento = $_GET['id_evento'];

$data1 = mysqli_query($conexao, "select  * from tb_evento WHERE id_evento  = '".$id_evento."';") or die(mysqli_error("ERRO: ".$conexao));
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
                            href="https://api.whatsapp.com/send?phone=5521154644522&text=Quero%20informa%C3%A7%C3%B5es%20sobre%20este%20evento."
                            ><i class="mdi mdi-whatsapp"></i
                          ></a>
                        </li>
                        <li class="el-item">
                          <a
                            class="btn default btn-outline el-link"
                            href="www.evently.com.br/eventos"
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
</br></br></br></br></br></br> </br></br></br></br></br></br></br></br> </div>
                            </div>
              </div>
        </div>
