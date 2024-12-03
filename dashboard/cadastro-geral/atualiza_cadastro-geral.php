<?php
    include "data\conexao.php";

    $id_membro      = $_GET["id_membro"    ];
    $nome_membro    = $_POST["nome_membro"];
    $cpf            = $_POST["cpf"];
    $nascimento     = $_POST["nascimento"];
    $sexo           = $_POST["sexo"];   
    $funcao_membro  = $_POST["funcao_membro"];;
    $perfil         = $_POST["perfil"];
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

    $sql = "update tb_membro set ";
    $sql .= "nome_membro='".$nome_membro."', funcao_membro='".$funcao_membro."',dt_nascimento='".$fdg_dt_nasc."', sexo='".$sexo."', rg='".$rg."', cpf='".$cpf."', email='".$email."', telefone='".$telefone."', cep='".$cep."', estado='".$estado."', cidade='".$cidade."', endereco='".$endereco."', bairro='".$bairro."', complemento='".$complemento."', perfil='".$perfil."' ";
    $sql .= "where id_membro = '".$id_membro."';";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        header('Location: ');
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=4'</script>";
        mysqli_close($conexao);
    }
?>
