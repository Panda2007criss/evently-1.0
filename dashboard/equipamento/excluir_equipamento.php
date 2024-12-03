<?php
include "data\conexao.php";

$id_equipamento = (int) @$_GET['id_equipamento'];
 
$sql = "delete from tb_equipamento where id_equipamento = '$id_equipamento';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=4'</script>";
    mysqli_close($con);
}
?>
