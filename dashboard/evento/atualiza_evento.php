<?php
    include "data\conexao.php";

    $id         = $_GET["id_evento"];
    $nome       = $_POST["nome_evento"];
    $descricao  = $_POST["descricao_evento"];
    $data_e       = $_POST["data"];
    $data = date('Y-m-d',strtotime($data_e));

    $hr_i  = $_POST["hora_inicio"];
    $hr_f     = $_POST["hora_fim"];


    $sql = "update tb_evento set ";
    $sql .= "nome_evento='".$nome."',descricao_evento='".$descricao."',data='".$data."',hora_inicio='".$hr_i."',hora_fim='".$hr_f."'";
    $sql .= "where id_evento = '".$id."' ";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=4'</script>";
        mysqli_close($conexao);
    }
?>

