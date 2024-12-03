<?php
include "data\conexao.php";
$data  = date('Y-m-d');

$id_membro = (int) @$_GET['id_membro'];
$id_membro2 = $id_membro;
 

        $sql = "update tb_membro set ";
        $sql .= "voluntario='0', perfil='5' ";
        $sql .= "where id_membro = '".$id_membro."'";

        $sql2 = "delete from tb_habilitacao where id_membro = '$id_membro';"; 

        $sql3  =  "update tb_escala inner join tb_evento on (tb_escala.id_evento = tb_evento.id_evento) set ";
        $sql3 .=  "tb_escala.id_membro='0' ";
        $sql3 .=  "where tb_evento.data > '".$data."' AND tb_escala.id_membro = '".$id_membro2."'   ";

$resultado  = mysqli_query($conexao, $sql)or die(mysqli_error());
$resultado2 = mysqli_query($conexao, $sql2)or die(mysqli_error());
$resultado3 = mysqli_query($conexao, $sql3)or die(mysqli_error());

if ($resultado) {
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=3'</script>";
    mysqli_close($con);
}else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=4'</script>";
    mysqli_close($con);
}
?>
