<?php
    include "data\conexao.php";

    $id     = $_GET["id"];
    $email  = $_POST["email"];
    $email2 = $email;
    $nome   = $_POST["nome"];
    $nome2 = $nome;


    $sql = "update tb_usuario set ";
    $sql .= "nome='".$nome."',email='".$email."'";
    $sql .= "where id_usuario = '".$id."' ";


    $sql2 = "update tb_membro set ";
    $sql2 .= "nome_membro='".$nome2."',email='".$email2."'";
    $sql2 .= "where id_usuario = '".$id."' ";


    $resultado = mysqli_query($conexao, $sql);
    $resultado2 = mysqli_query($conexao, $sql2);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=listar_perfil&msg=1'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=listar_perfil&msg=4'</script>";
        mysqli_close($conexao);
    }
?>

