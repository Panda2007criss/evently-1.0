<?php
  include "data\conexao.php";


$id = $_POST['id'];


// verifica se foi enviado um arquivo 
if(isset($_FILES['foto-perfil']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	$arquivo_tmp = $_FILES['foto-perfil']['tmp_name'];
	$nome = $_FILES['foto-perfil']['name'];
	
	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para mimusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso server apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . '.' . $extensao;
		$novoNome2 = $novoNome;
		$novoNome3 = $novoNome2;
		// Concatena a pasta com o nome
		$destino = 'assets/img/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{

		}
		else
			echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
	}
	else
		echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}
else
{
	
}



$sql = "update tb_igreja set ";
$sql .= "imagem='".$novoNome2."'";
$sql .= "where cod_igreja = '".$id."' ";


$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja-my&msg=5'</script>";
	mysqli_close($conexao);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja-my&msg=4'</script>";
	mysqli_close($conexao);
}
?>