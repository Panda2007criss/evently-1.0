<?php
include('data/conexao.php');



    $email   = $_POST["email"];
    $senha1  = $_POST["senha1"];
    $senha2  = $_POST["senha2"];


        $data = mysqli_query($conexao, "select * from tb_usuario WHERE email = '".$email."'") or die(mysqli_error("ERRO: ".$conexao));
        $count = mysqli_num_rows($data);
        if ($count == '1') {
        header('Location: login.php?msg=12');

        }else{



            if ($senha1 != $senha2) {

            header('Location: login.php?msg=8');

            }
            else 
            {
                
                $senha_conf = $senha1;

                $data = mysqli_query($conexao, "select * from tb_membro WHERE email = '".$email."'") or die(mysqli_error("ERRO: ".$conexao));
                $count = mysqli_num_rows($data);
                    if ($count == '0') {
                    header('Location: login.php?msg=9');

                    }else{

            
                        while($info = mysqli_fetch_array($data)){ 
                        
                            $nome_membro= $info['nome_membro'];
                            $cod_igreja = $info['cod_igreja'];
                            $perfil     = $info['perfil'];
                            $id_usuario = $info['id_usuario'];
                        }
            
                        if ($perfil == '5'){
                            header('Location: login.php?&msg=13');
                           } else {


                                $sql = "insert into tb_usuario (id_usuario, nome, email, senha, cod_igreja, nivel, ativo) values ";
                                $sql .= "('$id_usuario','$nome_membro','$email','$senha_conf','$cod_igreja','$perfil','1')";
                                
                                $resultado = mysqli_query($conexao, $sql);


                                if($resultado){
                                    header('Location: login.php?msg=7');
                                    mysqli_close($conexao);
                                }else{
                                    header('Location: login.php?msg=4');
                                    mysqli_close($conexao);
                                }

                            }

                    }

            }    

        }
