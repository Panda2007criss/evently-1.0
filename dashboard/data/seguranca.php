<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../login.php?msg=1');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from tb_usuario where email = '{$usuario}' and senha = ('{$senha}')";

$result = mysqli_query($conexao, $query);

while($info = mysqli_fetch_array($result)){ 

       $id = $info['id_usuario'];
	   $user  = $info['nome'];
	   $fotoUser = $info['foto'];  
	   $nivel = $info['nivel'];
	   $cod_igreja  = $info['cod_igreja'];

}

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['id'] = $id;
	$_SESSION['usuario'] = $user;
	$_SESSION['foto'] = $fotoUser;
	$_SESSION['nivelAcesso'] = $nivel;
	$_SESSION['cod_igreja'] = $cod_igreja;

	$_SESSION['id'] = $id;
	header('Location: ../dashboard.php?page=home'.$nivel.'');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../login.php?&msg=2');
	exit();
}

