<?php
include "data\conexao.php";

$cod_igreja = (int) @$_GET['cod_igreja'];
 
$sql = "delete from tb_igreja where cod_igreja = '$cod_igreja';"; 

$resultado = mysqli_query($conexao, $sql)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja&msg=3'</script>";
    
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja&msg=4'</script>";
    mysqli_close($con);
}
?>
