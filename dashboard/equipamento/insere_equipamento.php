<?php
    include_once('data/conexao.php');

    $nome  = $_POST["nome"];
    $cod_igreja = $_SESSION['cod_igreja'];


    $sql = "insert into tb_equipamento (cod_igreja,descricao_equipamento) values ";
    $sql .= "('$cod_igreja','$nome')";
     
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=1'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_equipamento&msg=4'</script>";
        mysqli_close($conexao);
    }
?>


