<?php
    include "data\conexao.php";

    
    $id_administrador      = $_GET["id_administrador"];
    $nome_administrador    = $_POST["nome_administrador"];
    $cpf            = $_POST["cpf"];
    $nascimento     = $_POST["nascimento"];
    $sexo           = $_POST["sexo"];   
    $funcao_administrador  = $_POST["funcao_administrador"];;
    $rg         = $_POST["rg"];
    $email      = $_POST["email"];
    $telefone  = $_POST["telefone"];
    $estado     = $_POST["estado"];
    $cidade     = $_POST["cidade"];
    $cep        = $_POST["cep"];
    $endereco   = $_POST["endereco"];
    $bairro     = $_POST["bairro"];
    $complemento = $_POST["complemento"];
    

    $fdg_dt_nasc = date('Y-m-d',strtotime($nascimento)); 

    $sql = "update tb_administrador set ";
    $sql .= "nome_administrador='".$nome_administrador."', funcao_administrador='".$funcao_administrador."',dt_nascimento='".$fdg_dt_nasc."', sexo='".$sexo."', rg='".$rg."', cpf='".$cpf."', email='".$email."', telefone='".$telefone."', cep='".$cep."', estado='".$estado."', cidade='".$cidade."', endereco='".$endereco."', bairro='".$bairro."', complemento='".$complemento."' ";
    $sql .= "where id_usuario = '".$id_administrador."';";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=1'</script>";
        mysqli_close($conexao);
    }
?>
