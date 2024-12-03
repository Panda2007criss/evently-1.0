<?php
include('conexao.php');


$email_verificacao = $_POST["email_verificacao"];
$tipo_acesso       = $_POST["tipo_acesso"]; 



if (isset($_POST["email_verificacao"]) && isset($_POST["tipo_acesso"] )){ 


            if ($tipo_acesso == '1'){

                $query = "select * from tb_responsavel where email =  '".$email_verificacao."'  ";
                $result = mysqli_query($conexao, $query);

                while($info = mysqli_fetch_array($result)){ 
                    $nome   = $info['nome'];
                    $matricula = $info['mat_resp'];
                    $email  = $info['email'];
                    $cpf    = $info['cpf'];
                    $cod_ue = $info['cod_ue'];
                    $tipoac = 1; 

                    header('Location: ../login.php?acao=Cadastro&email='.$email.'&tipoac='.$tipoac.'&nomeac='.$nome.'&cpf='.$cpf.'&cod_ue='.$cod_ue.'&matricula='.$matricula.'');
                  } 
                }
    
    
                    if ($tipo_acesso == '2'){

                    $query = "select * from tb_administrador where email =  '".$email_verificacao."'  ";
                    $result = mysqli_query($conexao, $query);

                    while($info = mysqli_fetch_array($result)){ 
                        $nome   = $info['nome'];
                        $matricula = $info['mat_adm'];
                        $email  = $info['email'];
                        $cpf    = $info['cpf'];
                        $cod_ue = $info['cod_ue'];
                        $tipoac = 2; 

                        header('Location: ../login.php?acao=Cadastro&email='.$email.'&tipoac='.$tipoac.'&nomeac='.$nome.'&cpf='.$cpf.'&cod_ue='.$cod_ue.'&matricula='.$matricula.'');
                    } 
                    }


            
            if ($tipo_acesso == '3'){

                $query = "select * from tb_professor where email =  '".$email_verificacao."'  ";
                $result = mysqli_query($conexao, $query);
    
                while($info = mysqli_fetch_array($result)){ 
                    $nome   = $info['nome'];
                    $matricula = $info['mat_professor'];
                    $email  = $info['email'];
                    $cpf    = $info['cpf'];
                    $cod_ue = $info['cod_ue'];
                    $tipoac = 3; 
    
                    header('Location: ../login.php?acao=Cadastro&email='.$email.'&tipoac='.$tipoac.'&nomeac='.$nome.'&cod_ue='.$cod_ue.'&matricula='.$matricula.'');
                } 
                }

            
           
                if ($tipo_acesso == '4'){

                    $query = "select * from tb_aluno where email =  '".$email_verificacao."'  ";
                    $result = mysqli_query($conexao, $query);
        
                    while($info = mysqli_fetch_array($result)){ 
                        $nome   = $info['nome_aluno'];
                        $matricula = $info['mat_aluno'];
                        $email  = $info['email'];
                        $cpf    = $info['cpf'];
                        $cod_ue = $info['cod_ue'];
                        $tipoac = 4; 
        
                        header('Location: ../login.php?acao=Cadastro&email='.$email.'&tipoac='.$tipoac.'&nomeac='.$nome.'&cpf='.$cpf.'&cod_ue='.$cod_ue.'&matricula='.$matricula.'');
                    } 
                    }  
                    
                    
                    if ($tipo_acesso == '5'){

                        $query = "select * from tb_administrador where email =  '".$email_verificacao."'  ";
                        $result = mysqli_query($conexao, $query);
            
                        while($info = mysqli_fetch_array($result)){ 
                            $nome   = $info['nome'];
                            $matricula = $info['mat_adm'];
                            $email  = $info['email'];
                            $cpf    = $info['cpf'];
                            $cod_ue = $info['cod_ue'];
                            $tipoac = 5; 
            
                            header('Location: ../login.php?acao=Cadastro&email='.$email.'&tipoac='.$tipoac.'&nomeac='.$nome.'&cpf='.$cpf.'&cod_ue='.$cod_ue.'&matricula='.$matricula.'');
                        } 
                        }     

            

}

?>

