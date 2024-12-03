<?php
include "data\conexao.php";


$id_assinatura = $_POST['id_assinatura'];
$cod_igreja    = $_POST['cod_igreja'];
$metodo        = $_GET['metodo'];


$data = mysqli_query($conexao, "select * from tb_assinatura WHERE id_assinatura = '".$id_assinatura."';") or die(mysqli_error("ERRO: ".$conexao));
while($info = mysqli_fetch_array($data)){ 
    $cod   =  $info['cod_igreja'];
    $valor =  $info['valor'];
    $dt_v  =  $info['dt_vencimento'];
    $dt_v2   = date('Y-m-d', strtotime ("+31 days", strtotime($dt_v)));

    $sql = "insert into tb_assinatura (cod_igreja, valor, dt_vencimento, pagto) values ";
    $sql .= "('$cod','$valor','$dt_v2','0')";
    $resultado = mysqli_query($conexao, $sql);
    
}

    $sql2 = "update tb_assinatura SET metodo_pagto = '$metodo', pagto = 1 WHERE id_assinatura = '$id_assinatura';"; 
    
    $resultado2 = mysqli_query($conexao, $sql2)or die(mysqli_error());
    
    if ($resultado2) {
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_assinatura_c&msg=1'</script>";
        mysqli_close($con);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_assinatura_c&msg=4'</script>";
        mysqli_close($con);
    }
    

?>