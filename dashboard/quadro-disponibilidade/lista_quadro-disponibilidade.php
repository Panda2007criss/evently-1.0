<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Quadro de Disponibilidade</h2>
		</div>

	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12 border='2'">
			<?php
				$data = mysqli_query($conexao, " select * FROM tb_evento where cod_igreja = '".$_SESSION['cod_igreja']."' AND status = '1' ;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0' width='100%' border='2'>";
				echo "<thead><tr>";
				echo "<td width='8%'><strong>COLABORADORES</strong></td>";
				while($info = mysqli_fetch_array($data))
				 { 
					echo "<td width='8%' align='center'><strong>".$info['nome_evento']."</strong></td>";
				}
				echo "</tr></tbody></table>";


				$data2 = mysqli_query($conexao, "select * from tb_membro INNER JOIN tb_escala ON (tb_membro.id_membro = tb_escala.id_membro) WHERE tb_membro.voluntario = 1 and tb_membro.cod_igreja = '".$_SESSION['cod_igreja']."' GROUP BY tb_membro.nome_membro;") or die(mysqli_error("ERRO: ".$conexao));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0' width='100%' border='2'>";
				echo "<tbody>";
				while($info2 = mysqli_fetch_array($data2))
				 { 
					$id_evento2 = $info2['id_evento'];
					$id_membro2 = $info2['id_membro'];
					echo "<tr><td width='8%'>".$info2['nome_membro']."</td>";
					
					$data3 = mysqli_query($conexao, "select * from tb_disponibilidade INNER JOIN tb_evento ON (tb_disponibilidade.id_evento = tb_evento.id_evento)WHERE tb_disponibilidade.id_membro = '".$id_membro2."' AND tb_evento.status = '1' ORDER BY tb_disponibilidade.id_evento ASC ;" ) or die(mysqli_error("ERRO: ".$conexao));
					$contar = mysqli_num_rows($data3);

					if ($contar == '0'){
						echo "<td width='8%' align='center'> N\D </td>";
					} else{ 
						while($info3 = mysqli_fetch_array($data3)){
							echo "<td width='8%' align='center'>";

							if ($info3['disponibilidade'] == '1') { 
								echo "<img src='assets/img/icon-v.png' width='30px' height='30px'>"; 
							} else { 
								echo "<img src='assets/img/icon-x.png' width='30px' height='30px'>"; 
							}
							echo "</td>"; 
						}
					}
					
				}
				echo "</tr></tbody></table>";
			?>				
			
		</div>
	</div>
	<div class="row">
		<h4>Legenda</h4>
            <div class="col-md-3">
              <div class="card mt-0">
                <div class="row">
                  <div class="col-md-6 border-left text-center pt-2">
                    <h5 class="mb-3 fw">Voluntário Selecionado</h5>
                    <img src='assets/img/icon-x.png' width='30px' height='30px'>
                  </div>
				  <div class="col-md-6 border-left text-center pt-2">
                    <h5 class="mb-1 fw">Disponível para ser voluntário</h5>
                    <img src='assets/img/icon-v.png' width='30px' height='30px'>
                  </div>
                </div>
              </div>
            </div>
			</div>
</div>
