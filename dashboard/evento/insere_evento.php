<?php
    include_once('data/conexao.php');

    $nome_evento  = $_POST["nome_evento"];
    $descricao  = $_POST["descricao"];
    $cod_igreja = $_SESSION['cod_igreja'];
    $cod_igreja2 = $cod_igreja;
    $data_e     = $_POST["data"];
    $data = date('Y-m-d',strtotime($data_e));
    $hr_inicio  = $_POST["hora_inicio"];
    $hr_fim     = $_POST["hora_fim"];
    $status     = '1';

    if(isset($_POST['funcao'])){
        $funcoes = $_POST['funcao'];
        $id_contador = count($funcoes);

        foreach ($funcoes as $funcao){
           $funcoes_post[] = $funcao;
        }

    }
        
    include_once('upload_imagem.php');

    include_once('token.php');
    
            
        $sql = "insert into tb_evento (token, cod_igreja, nome_evento, descricao_evento, imagem, data, hora_inicio, hora_fim, status) values ";
        $sql .= "('$token','$cod_igreja','$nome_evento','$descricao','$novoNome2','$data','$hr_inicio','$hr_fim','$status')";
        $resultado = mysqli_query($conexao, $sql);
    
        $func_hab = '1';
        for ($i = 0; $i < $id_contador; $i++){
    
        $sql2 = "insert into tb_escala (cod_igreja, token, id_funcao, func_hab) values ";
        $sql2 .= "('$cod_igreja2','$token','{$funcoes_post[$i]}','$func_hab')";
    
        $resultado2 = mysqli_query($conexao, $sql2);
    
        }
    
    
        if($resultado2){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=1'</script>";
        mysqli_close($conexao);
        }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_evento&msg=1'</script>";
        mysqli_close($conexao);
        }
    

   
            


    
?>