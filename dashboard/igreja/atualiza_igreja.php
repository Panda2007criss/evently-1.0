<?php
    include "data\conexao.php";

    $cod_igreja    = $_GET["cod_igreja"];
    $nome          = $_POST["nome"];
    $imagem        = $_POST["imagem"];
    $denominacao   = $_POST["denominacao"];
    $descricao     = $_POST["descricao"];
    $telefone      = $_POST["telefone"];
    $hierarquia    = $_POST["hierarquia"];
    $capacidade    = $_POST["capacidade"];
    $cep           = $_POST["cep"];
    $estado        = $_POST["estado"];
    $cidade        = $_POST["cidade"];
    $endereco      = $_POST["endereco"];
    $complemento   = $_POST["complemento"];


    $sql = "update tb_igreja set ";
    $sql .= "nome='".$nome."', imagem='".$imagem."', denominacao='".$denominacao."', descricao='".$descricao."', telefone='".$telefone."',hierarquia='".$hierarquia."', capacidade='".$capacidade."', cep='".$cep."', estado='".$estado."', cidade='".$cidade."', endereco='".$endereco."', complemento='".$complemento."'";
    $sql .= "where cod_igreja = '".$cod_igreja."'";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_igreja&msg=4'</script>";
        mysqli_close($conexao);
    }
?>
