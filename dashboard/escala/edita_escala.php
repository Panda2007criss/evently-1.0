<?php
    include "data\conexao.php";
	//include "base\conexao.php";
	$id_evento = (int) $_GET['id_evento'];
	$data = mysqli_query($conexao, "select * from tb_escala INNER JOIN tb_funcao ON (tb_escala.id_funcao = tb_funcao.id_funcao) INNER JOIN tb_membro ON (tb_escala.id_membro = tb_membro.id_membro) where id_evento = '".$id_evento."' AND tb_escala.func_hab = 1;");
    $count = mysqli_num_rows($data);
    




?>
<div id="main" class="container-fluid">

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_escala" method="post">

	<!-- 1ª LINHA -->	
	<?php while($info = mysqli_fetch_array($data)){ ?>
	<div class="row"> 
        <div class="form-group col-md-1">
			<label for="nome">Função</label>
			<input type="text" class="form-control" name="funcao[]" value="<?php echo $info["id_funcao"]; ?>"  readonly >
		</div>
		<div class="form-group col-md-4">
			<label for="nome">Função</label>
			<input type="text" class="form-control" name="descricao_funcao" value="<?php echo $info["descricao_funcao"]; ?>"  readonly >
		</div>
        <?php
                    $data2 = mysqli_query($conexao, "select * from tb_membro INNER JOIN tb_habilitacao ON (tb_membro.id_membro = tb_habilitacao.id_membro) WHERE tb_habilitacao.id_funcao = '".$info["id_funcao"]."' AND tb_habilitacao.habilitacao = '1' ;") or die(mysqli_error("ERRO: ".$conexao)); ?>
                    <div class="form-group col-md-2" name="id_membro[]">
                    <label for="cod_curso">Voluntário</label>
                    <select class="form-control" name="id_membro[]">
					
                    <option name="id_membro[]" value="<?php echo $info['id_membro']; ?>"><?php if ($info['id_membro'] == '0'){echo "VAGA EM ABERTO"; }else {echo $info["nome_membro"]; } ?></option>
                    <?php while($info2 = mysqli_fetch_array($data2)){ ?>
                        <option name="id_membro[]" value="<?php echo $info2['id_membro']; ?>"><?php if ($info2['id_membro'] == '0'){echo "VAGA EM ABERTO"; }else {echo $info2["nome_membro"]; } ?></option>
                        <?php }; ?>
					<option name="id_membro[]" value="0">Deixar Vago</option> 
                    </select>

                        </div>
                                   
	</div>

	<?php }; ?>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_escala" class="btn btn-secondary">Voltar</a>
            <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
					<input type='hidden' name='id_evento' value="<?php echo $id_evento;?>">
					<input type='hidden' name='cont' value="<?php echo $count;?>">
		</div>
	</div>
</div>