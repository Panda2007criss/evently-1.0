<?php
    include ('..\data\conexao.php');
    

    $email   = $_POST["email"];
    $senha1  = $_POST["senha1"];
    $senha2  = $_POST["senha2"];


    if ($senha1 != $senha2) {

        echo "<script language='javaScript'>window.location.href='../cadastro-cliente.php?msg=8'</script>";

    } else {
                $senha_conf = $senha1;
            
    
    $nome_completo    = $_POST["nome_completo"];
    $nome_completo2 = $nome_completo;
    $dt_nascimento  = $_POST["dt_nasc"];
    $sexo           = $_POST["sexo"]; 
    $funcao_membro  = $_POST["funcao_membro"];
    $perfil         = '2';
    $status         = 1;
    $rg         = $_POST["rg"];
    $cpf        = $_POST["cpf"];
    $email      = $_POST["email"];
    $email2     = $email; 
    $telefone   = $_POST["telefone"];
    
    
    $cod_igreja    = rand(50, 1999);
    $id_usuario    = rand(10, 999);
    $id_usuario2   = $id_usuario;
    $cod_igreja2  = $cod_igreja;
    $cod_igreja3  = $cod_igreja2;
    $cod_igreja4  = $cod_igreja3;
    $cod_igreja5  = $cod_igreja4;

    $nome_igreja     = $_POST["nome_igreja"];
    $denominacao     = $_POST["denominacao"];
    $descricao       = $_POST["descricao"]; 
    $telefone2       = $telefone;
    $capacidade      = $_POST["capacidade"];
    $ativo           = '1';
    $ativo2          = $ativo;
    $nivel           = '2';
    $pagto           = '1';
    $npagto          = '0'; 
    $dt_vencimento    = date("Y-m-d",strtotime(date("Y-m-d")."+7 day"));
    $dt_vencimento2  = $dt_vencimento;
    $dt_renovacao    = date("Y-m-d",strtotime(date("Y-m-d")."+37 day"));
    $fdg_dt_nasc     = date('Y-m-d',strtotime($dt_nascimento));

    $valor = '14.99';
    $valor2 = $valor;
     
    $fotoPerfil  = 'user-perfil.png';
    $fotoPerfil2 = 'user-perfil.png';
    $fotoIgreja  = 'igreja.png';
    

    $sql = "insert into tb_membro (id_usuario, foto, cod_igreja, nome_membro, funcao_membro, dt_nascimento, sexo, rg, cpf, email, telefone, perfil, status)values ";
    $sql .= "('$id_usuario','$fotoPerfil','$cod_igreja','$nome_completo','$funcao_membro','$fdg_dt_nasc','$sexo','$rg','$cpf','$email','$telefone','$perfil','$status')";

    $sql2 = "insert into tb_igreja (cod_igreja, nome, imagem, denominacao, descricao, telefone, capacidade, exp_licenca, ativo)values ";
    $sql2 .= "('$cod_igreja2','$nome_igreja','$fotoIgreja','$denominacao','$descricao','$telefone2','$capacidade','$dt_vencimento','$ativo')";

    $sql3 = "insert into tb_usuario (id_usuario, nome, email, senha, foto, cod_igreja, nivel, ativo )values ";
    $sql3 .= "('$id_usuario2','$nome_completo2','$email2','$senha_conf','$fotoPerfil2','$cod_igreja3','$nivel','$ativo2')";

    $sql4 = "insert into tb_assinatura (cod_igreja, valor, dt_vencimento, pagto)values ";
    $sql4 .= "('$cod_igreja4','$valor','$dt_vencimento2','$pagto')";

    $sql5 = "insert into tb_assinatura (cod_igreja, valor, dt_vencimento, pagto)values ";
    $sql5 .= "('$cod_igreja5','$valor2','$dt_renovacao','$npagto')";


    $resultado1 = mysqli_query($conexao, $sql);
    $resultado2 = mysqli_query($conexao, $sql2);
    $resultado3 = mysqli_query($conexao, $sql3);
    $resultado4 = mysqli_query($conexao, $sql4);
    $resultado5 = mysqli_query($conexao, $sql5);


    if($resultad4){
        header('Location: ../login.php?&msg=7');
        mysqli_close($conexao);
    }else{
        header('Location: ../login.php?&msg=7');
        mysqli_close($conexao);
    }

}
    ?>