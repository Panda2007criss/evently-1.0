<?php
    include "data\conexao.php";

    $id      = $_GET["id"];
    $senha1  = $_POST["senha1"];
    $senha2  = $_POST["senha2"];


    if ($senha1 == $senha2) {

    $sql = "update tb_usuario set ";
    $sql .= "senha='".$senha1."'";
    $sql .= "where id_usuario = '".$id."' ";

    

   }
   else{
    echo "<script language='javaScript'>window.location.href='dashboard.php?page=listar_senha&msg=3'</script>";
   }

   $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=listar_senha&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=listar_senha&msg=4'</script>";
        mysqli_close($conexao);
    }
?>

