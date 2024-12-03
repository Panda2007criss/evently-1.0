<?php
include "data\conexao.php";

$id_evento = (int) @$_GET['id_evento'];
 
$sql = "delete from tb_escala where id_evento = '$id_evento';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='ddashboard.php?page=lista_escala&msg=3'</script>";
    header('Location: dashboard.php?page=lista_escala&msg=3');
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_escala&msg=4'</script>";
    header('Location: ');
    mysqli_close($con);
}
?>
