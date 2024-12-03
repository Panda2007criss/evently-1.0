<?php
include "data\conexao.php";

$id_evento = (int) @$_GET['id_evento'];
 
$sql = "delete from tb_escala where id_evento = '$id_evento';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    header('Location: dashboard.php?page=lista_escala&msg=3');
    mysqli_close($con);
}else{
    header('Location: dashboard.php?page=lista_escala&msg=4');
    mysqli_close($con);
}
?>
