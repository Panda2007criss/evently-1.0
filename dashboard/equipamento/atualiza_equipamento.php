<?php
   
    include "data\conexao.php";

    $id       = $_GET["id_equipamento"];
    $nome     = $_POST["nome"];


    $sql = "update tb_equipamento set ";
    $sql .= "descricao_equipamento='".$nome."'";
    $sql .= "where id_equipamento = '".$id."' ";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=2'</script>";
        mysqli_close($conexao);
        
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=4'</script>";
        mysqli_close($conexao);
        
    }

    


