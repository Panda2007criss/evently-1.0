<?php  include_once('data/conexao.php'); 
$id_assinatura = $_GET['id_assinatura'];
$cod_igreja    = $_GET['cod_igreja'];
?>
<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Efetuar Pagamento</h5>
                  <div class="table-responsive">
                  <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">PIX</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">CARTÃO DE CRÉDITO</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">BOLETO</button>
                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="p-20">
                      <p>
                        pix
                      </p>
                      <img
                        src="assets/img/qrcode.png"
                        class="img-fluid"
                      />
                      <p>chave: 500518986407965539501324698643290891895842</p>

                      <form action="?page=pagar_assinatura&metodo=1" method="post">
                                                <!-- 1ª LINHA -->	
                                            
        
                                                <div id="actions" class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">EFETUAR PAGAMENTO</button>
                                                        <a href="?page=lista_assinatura_c" class="btn btn-danger">Cancelar</a>
                                                        <input type="hidden" class="form-control" name="id_assinatura" value="<?php echo $id_assinatura; ?>">
                                                        <input type="hidden" class="form-control" name="cod_igreja" value="<?php echo $cod_igreja; ?>">
                                                    </div>
                                                </div>
                                            
                                            </form> 
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form action="?page=pagar_assinatura&metodo=2" method="post">
                                                <!-- 1ª LINHA -->	
                                            
                                                    <div class="form-group col-md-5">
                                                        <label for="nome_aluno">Número</label>
                                                        <input type="text" class="form-control" name="numero" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="nome_aluno">Nome</label>
                                                        <input type="text" class="form-control" name="nome" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="nome_aluno">CPF do Titular</label>
                                                        <input type="text" class="form-control" name="cpf" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="nome_aluno">Vencimento</label>
                                                        <input type="text" class="form-control" name="vencimento" required>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="nome_aluno">Cód. Segurança</label>
                                                        <input type="text" class="form-control" name="cod_seguranca" required>
                                                    </div>        
                                                <hr />
                                                
                                                <div id="actions" class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">EFETUAR PAGAMENTO</button>
                                                        <a href="?page=lista_assinatura_c" class="btn btn-danger">Cancelar</a>
                                                        <input type="hidden" class="form-control" name="id_assinatura" value="<?php echo $id_assinatura; ?>">
                                                        <input type="hidden" class="form-control" name="cod_igreja" value="<?php echo $cod_igreja; ?>">
                                                    </div>
                                                </div>
                                            
                                            </form> 
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="p-20">
                      <p>
                        BOLETO
                      </p>
                      <img
                        src="assets/img/boleto-eventyl.jpg"
                        class="img-fluid"
                      />
                      <p></p>
                      <form action="?page=pagar_assinatura&metodo=3" method="post">
                                                <!-- 1ª LINHA -->	
                                            
        
                                                <div id="actions" class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">EFETUAR PAGAMENTO</button>
                                                        <a href="?page=lista_assinatura_c" class="btn btn-danger">Cancelar</a>
                                                        <input type="hidden" class="form-control" name="id_assinatura" value="<?php echo $id_assinatura; ?>">
                                                        <input type="hidden" class="form-control" name="cod_igreja" value="<?php echo $cod_igreja; ?>">
                                                    </div>
                                                </div>
                                            
                                            </form> 
                    </div>
</div>
                </div>
                </div>


				  

				</div>
                </div>
              </div>
            </div>
          </div>
  
       

