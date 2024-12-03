<?php
include "data\conexao.php";

$id_assinatura = (int) @$_GET['id_assinatura'];

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

    $sql2 = "update tb_assinatura SET pagto = 1 WHERE id_assinatura = '$id_assinatura';"; 
    
    $resultado2 = mysqli_query($conexao, $sql2)or die(mysqli_error());
    
    if ($resultado2) {
        header('Location: dashboard.php?page=lista_assinatura&msg=3');
        mysqli_close($con);
    }else{
        header('Location: dashboard.php?page=lista_assinatura&msg=4');
        mysqli_close($con);
    }
    ?>
}


