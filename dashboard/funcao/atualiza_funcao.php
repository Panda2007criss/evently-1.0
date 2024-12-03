<?php
    include "data\conexao.php";

    $id_funcao       = $_GET["id_funcao"];
    $descricao_funcao     = $_POST["descricao_funcao"];
    $cor_funcao     = $_POST["cor_funcao"];
    $equipamento = $_POST["equipamento"];


    $sql = "update tb_funcao set ";
    $sql .= "descricao_funcao='".$descricao_funcao."', cor_funcao='".$cor_funcao."', id_equipamento='".$equipamento."'";
    $sql .= "where id_funcao = '".$id_funcao."' ";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=4'</script>";
        mysqli_close($conexao);
    }
?>

