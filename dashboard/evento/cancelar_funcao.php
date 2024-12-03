<?php
include "data\conexao.php";

$id_escala = (int) @$_GET['id_escala'];
 
$sql = "update tb_escala SET id_membro= '0'  where id_escala = '$id_escala';"; 

$sql2 = "update tb_disponibilidade set ";
$sql2 .= "disponibilidade='1'";
$sql2 .= "where id_evento = '".$evento."' AND id_membro = '".$membro."' AND cod_igreja = '".$_SESSION['cod_igreja']."' ";

$resultado = mysqli_query($conexao, $sql);
$resultado2 = mysqli_query($conexao, $sql2);

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento_vlt&msg=5'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento_vlt&msg=4'</script>";
    header('Location: ');
    mysqli_close($con);
}
?>
