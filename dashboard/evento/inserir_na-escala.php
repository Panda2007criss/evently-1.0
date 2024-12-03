<?php
    include "data\conexao.php";

    $evento    = $_POST["id_evento"];
    $funcao   = $_POST["id_funcao"];
    $membro   = $_POST["id_membro"];
    

    $sql = "update tb_escala set ";
    $sql .= "id_membro='".$membro."'";
    $sql .= "where id_evento = '".$evento."' AND id_funcao = '".$funcao."' ";


    $sql2 = "update tb_disponibilidade set ";
    $sql2 .= "disponibilidade='0'";
    $sql2 .= "where id_evento = '".$evento."' AND id_membro = '".$membro."' AND cod_igreja = '".$_SESSION['cod_igreja']."' ";



    $resultado = mysqli_query($conexao, $sql);
    $resultado2 = mysqli_query($conexao, $sql2);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento_vlt&msg=6'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento_vlt&msg=4'</script>";
        mysqli_close($conexao);
    }

?>


