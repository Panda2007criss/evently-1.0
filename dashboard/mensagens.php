<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Dados de Acesso inválidos!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 2:
			echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
						Sessão Encerrada!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 3:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Você precisar está logado para utilizar o sistema
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
				echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
							Cadatro Realizado com Sucesso!.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
			break;
		case 6:
				echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
								Erro durante acesso a Base de dados! Contate o administrador.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
			break;
			case 7:
				echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
							PARABÉNS! SEUS CADASTRO FOI REALIZADO COM SUCESSO. UTILIZE E-MAIL E SENHA CADASTRADO PARA ACESSAR O SISTEMA.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						  </div>';
				break;
				case 8:
					echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
								As Senhas Digitadas não são Iguais!
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							  </div>';
					break;
				case 9:
					echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
								A Conta não foi encontrada, contacte o administrador do sistema
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							  </div>';
					break;
				case 10:
					echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
								Conta de Acesso Criada com Sucesso!
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>';
					break;
		
					case 11:
						echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
									Cadatro Realizado com Sucesso!.
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>';
						break;
						case 12:
								echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
											Você Já possui cadastro! efetuei o login ou solicite o reenvio de senha por email.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>';
							break;
							
							case 13:
								echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
											Desculpe! Sua conta está com perfil de Membro, contacte a secretaria da sua Igreja.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>';
							break;
				
	}
	$msg = 0;
}
?>
