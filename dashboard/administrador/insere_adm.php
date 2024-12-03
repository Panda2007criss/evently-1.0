<?php
    include_once('data/conexao.php');

    $nome_administrador       = $_POST["nome_administrador"];
    $nascimento = $_POST["dt_nasc"];
    $sexo           = $_POST["sexo"]; 
    $funcao_administrador     = $_POST["funcao_administrador"];
    $perfil     = '1';
    $rg         = $_POST["rg"];
    $cpf        = $_POST["cpf"];
    $email      = $_POST["email"];
    $telefone   = $_POST["telefone"];
    $estado     = $_POST["estado"];
    $cidade     = $_POST["cidade"];
    $cep        = $_POST["cep"];
    $endereco   = $_POST["endereco"];
    $bairro     = $_POST["bairro"];
    $complemento = $_POST["complemento"];
    $status    = 1;

    
    $fdg_dt_nasc = date('Y-m-d',strtotime($nascimento));


    $sql = "insert into tb_administrador (nome_administrador, funcao_administrador, dt_nascimento, sexo, rg, cpf, email, telefone, cep, estado, cidade, endereco, complemento, perfil, status)values ";
    $sql .= "('$nome_administrador','$funcao_administrador','$fdg_dt_nasc','$sexo','$rg','$cpf','$email','$telefone','$cep','$estado','$cidade','$endereco','$complemento','$perfil','$status')";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=1'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_adm&msg=4'</script>";
        mysqli_close($conexao);
    }
?>