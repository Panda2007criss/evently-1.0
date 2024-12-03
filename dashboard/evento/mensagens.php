<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Evento cadastrado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 2:
			echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
						Evento atualizado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 3:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Evento cancelado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;

		case 4:
			echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						Erro durante acesso a Base de dados! Contate o administrador.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
			case 5:
				echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Cancelado com sucesso!
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
				break;
				case 6:
					echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
								Escala Realizada!
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							  </div>';
					break;
					case 7:
						echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
									Flyer do Evento Cadastrado com sucesso!
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								  </div>';
						break;
	}
	$msg = 0;
}
?>
