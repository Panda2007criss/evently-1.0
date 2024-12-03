<?php
include "data\conexao.php";

$id_usuario = (int) @$_GET['id_usuario'];
 
$sql = "delete from tb_administrador where id_usuario = '$id_usuario';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=4'</script>";
    mysqli_close($con);
}
?>
