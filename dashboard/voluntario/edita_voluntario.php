<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_membro = (int) $_GET['id_membro'];
	$data = mysqli_query($conexao, "select * from tb_habilitacao INNER JOIN tb_funcao ON(tb_habilitacao.Id_funcao = tb_funcao.id_funcao) where tb_habilitacao.id_membro = '".$id_membro."' order by tb_habilitacao.id_funcao;");

?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Função</h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_voluntario&id_membro=<?php echo $id_membro; ?>" method="post">


	<!-- 1ª LINHA -->	
	<div class="row"> 
		
		<div class="form-group col-md-2" name="id_funcao">

                  <?php while($info = mysqli_fetch_array($data)){ ;?>
                    <div class='form-group col-md-12'>
						<input class='form-check-input' type='checkbox' value='<?php echo $info['id_funcao']; ?>'  name='F_funcoes[]' id='flexCheckDefault' <?php if ($info['habilitacao'] == 1 ): echo 'checked'; else: echo ''; endif; ?>>
						<label class='form-check-label' for='flexCheckDefault'>
							<?php echo $info['descricao_funcao']; ?>
						</label>
					</div>
					
                  <?php }; ?>

				  <input type="hidden" name="id_membro" value="<?php echo $id_membro; ?>">
	</div>
    
	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_voluntario" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>