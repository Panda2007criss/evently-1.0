<?php
include "data\conexao.php";

$id_funcao = (int) @$_GET['id_funcao'];
 
$sql = "delete from tb_funcao where id_funcao = '$id_funcao';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=4'</script>";
    mysqli_close($con);
}
?>
