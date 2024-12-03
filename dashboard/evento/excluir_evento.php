<?php
include "data\conexao.php";

$id_evento = (int) @$_GET['id_evento'];
$status = '0'; 

$sql = "update tb_evento set ";
$sql .= "status = '".$status."' ";
$sql .= "where id_evento = '".$id_evento."' ";




$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());


if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=4'</script>";
    mysqli_close($con);
}
?>
