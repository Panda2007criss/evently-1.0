<?php
    include_once('data/conexao.php');

    $id_membro  = $_POST["id_membro"];
    $nome_membro       = $_POST["nome_membro"];
    $nascimento = $_POST["dt_nasc"];
    $sexo           = $_POST["sexo"]; 
    $funcao_membro     = $_POST["funcao_membro"];
    $perfil     = $_POST["perfil"];
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
    $cod_igreja    = $_SESSION['cod_igreja'];
    
    $fdg_dt_nasc = date('Y-m-d',strtotime($nascimento));

    

            if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0){

                $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                $nome = $_FILES['arquivo']['name'];
                
                // Pega a extensao
                $extensao = strrchr($nome, '.');
            
                // Converte a extensao para mimusculo
                $extensao = strtolower($extensao);
            
                // Somente imagens, .jpg;.jpeg;.gif;.png
                // Aqui eu enfilero as extesões permitidas e separo por ';'
                // Isso server apenas para eu poder pesquisar dentro desta String
                if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
                {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    $novoNome = md5(microtime()) . '.' . $extensao;
                
                    
                    // Concatena a pasta com o nome
                    $destino = 'assets/img/users/' . $novoNome; 
                    
                    // tenta mover o arquivo para o destino
                    if( @move_uploaded_file( $arquivo_tmp, $destino  ))
                    {
            
                    }
                    else
                        echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
                    }
                else {
                }
            }
            
            if (!empty($novoNome)){	
                $novoNome2 = $novoNome;
            } else{
                $novoNome2 = "user.jpg";
            }
                


    $sql = "insert into tb_membro (id_membro, foto, cod_igreja, nome_membro, funcao_membro, dt_nascimento, sexo, rg, cpf, email, telefone, cep, estado, cidade, endereco, complemento, perfil, status)values ";
    $sql .= "('$id_membro','$novoNome2','$cod_igreja','$nome_membro','$funcao_membro','$fdg_dt_nasc','$sexo','$rg','$cpf','$email','$telefone','$cep','$estado','$cidade','$endereco','$complemento','$perfil','$status')";


    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=1'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_cadastro-geral&msg=4'</script>";
        mysqli_close($conexao);
    }
?>