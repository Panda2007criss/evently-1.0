<?php
    include_once('data/conexao.php');
    


    
    $nome_completo    = $_POST["nome_completo"];
    $dt_nascimento  = $_POST["dt_nasc"];
    $sexo           = $_POST["sexo"]; 
    $funcao_membro  = $_POST["funcao_membro"];
    $perfil         = '2';
    $status         = 1;
    $rg         = $_POST["rg"];
    $cpf        = $_POST["cpf"];
    $telefone   = $_POST["telefone"];
    $email      = $_POST["email"];
    
    
    $cod_igreja    = rand(50, 1999);
    $id_usuario    = rand(10, 999);
    $cod_igreja2  = $cod_igreja;
    $cod_igreja4  = $cod_igreja2;

    $nome_igreja     = $_POST["nome_igreja"];
    $denominacao     = $_POST["denominacao"];
    $descricao       = $_POST["descricao"]; 
    $telefone2       = $telefone;
    $assinatura      = $_POST["tipo_assinatura"];
    $capacidade      = $_POST["capacidade"];
    $ativo           = '1';
    $nivel           = '2';
    $pagto           = '1'; 
    
    $fdg_dt_nasc     = date('Y-m-d',strtotime($dt_nascimento));
    $valor = '14.99';


    if($assinatura == '1'){
        $dt_vencimento = date("Y-m-d",strtotime(date("Y-m-d")."+7 day"));
    } else {
        $dt_vencimento = date("Y-m-d",strtotime(date("Y-m-d")."+30 day"));
    }
     
    $dt_vencimento2  = $dt_vencimento;


    $sql = "insert into tb_membro (id_usuario, cod_igreja, nome_membro, funcao_membro, dt_nascimento, sexo, rg, cpf, email, telefone, perfil, status)values ";
    $sql .= "('$id_usuario','$cod_igreja','$nome_completo','$funcao_membro','$fdg_dt_nasc','$sexo','$rg','$cpf','$email','$telefone','$perfil','$status')";

    $sql2 = "insert into tb_igreja (cod_igreja, nome, denominacao, descricao, telefone, capacidade, exp_licenca, ativo)values ";
    $sql2 .= "('$cod_igreja2','$nome_igreja','$denominacao','$descricao','$telefone2','$capacidade','$dt_vencimento','$ativo')";


    $sql4 = "insert into tb_assinatura (cod_igreja, valor, dt_vencimento, pagto)values ";
    $sql4 .= "('$cod_igreja4','$valor','$dt_vencimento2','$pagto')";


    $resultado1 = mysqli_query($conexao, $sql);
    $resultado2 = mysqli_query($conexao, $sql2);
    $resultado4 = mysqli_query($conexao, $sql4);


    if($resultad4){
        header('Location: dashboard.php?page=lista_igreja&msg=1');
        mysqli_close($conexao);
    }else{
        header('Location: dashboard.php?page=lista_igreja&msg=1');
        mysqli_close($conexao);
    }

    ?>