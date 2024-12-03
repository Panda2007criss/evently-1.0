<?php  include_once('data/conexao.php'); ?>
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Relatório</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Relatório
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>



	<div> <?php include "mensagens.php"; ?> </div>

	<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Relatórios</h5>
                </div>
			          <div class="row">
                  <div class='form-group col-md-4'>
                    <label for='cod_curso'>Voluntários por Eventos</label>
                    <select class='form-control' name="link" id="" onchange="window.location.href=this.value;">";
                      <option selected value="" target="_blank">Selecione</option>
                      <?php
                        $data2 = mysqli_query($conexao, "select * FROM tb_evento WHERE cod_igreja = '".$_SESSION['cod_igreja']."';") or die(mysqli_error("ERRO: ".$conexao));
                    while($info2 = mysqli_fetch_array($data2)) { 
                      echo "<option value='relatorio/relatorio_evento.php?&cod=".$_SESSION['cod_igreja']."&nome_evento=".$info2['nome_evento']."&id_evento=".$info2['id_evento']."&usuario=".$_SESSION['usuario']."' target='_parent'>".$info2['nome_evento']."</option>";
                      

                    }
                    ?>
                    </select>				
                  </div>
                 </div>
                    
					
	</div>
</div>
</div>
					
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
 $(document).ready(function(){

    $('#link').on('change', function () {
         var url = $(this).val(); 
         if (url) { 
             window.open(url, '_blank');
          }
          return false;
        });
     });
</script>
