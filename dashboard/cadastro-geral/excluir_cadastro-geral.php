<?php
include "data\conexao.php";

$id_membro = (int) @$_GET['id_membro'];
 
$sql = "delete from tb_membro where id_membro = '$id_membro';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=4'</script>";;
    mysqli_close($con);
}
?>
