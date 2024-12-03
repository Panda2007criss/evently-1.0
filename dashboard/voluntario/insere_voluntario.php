<?php

    include_once('data/conexao.php');
    
    
    $nome_voluntario  = $_POST['nome_voluntario'];
    $id_membro        = $_POST['id_membro'];
    $id_membro2       = $id_membro;
    $cod_igreja       = $_SESSION['cod_igreja'];
    $cod_igreja2      = $cod_igreja;
    $funcoes          = $_POST['F_funcoes'];
    $status = '1';
    $dataatual = date('Y-m-d');

    if(isset($_POST['funcao'])){
        $funcoes = $_POST['funcao'];

        foreach ($funcoes as $funcao){
           $funcoes_post[] = $funcao;
        }

    }    


    $data5 = mysqli_query($conexao, "select * from tb_evento WHERE  cod_igreja = '".$_SESSION['cod_igreja']."' ");
    while($info5 = mysqli_fetch_array($data5)){ 

       $evento = $info5['id_evento']; 
 
     
                 $disponibilidade = '1';

                 $sql = "insert into tb_disponibilidade (id_evento, id_membro, disponibilidade, cod_igreja) values ";
                 $sql .= "('$evento','$id_membro','$disponibilidade','$cod_igreja')";
     
                 $resultado5 = mysqli_query($conexao, $sql);
         
            
 }


    
    $data = mysqli_query($conexao, "select * from tb_funcao WHERE cod_igreja = '".$_SESSION['cod_igreja']."' ");
       while($info = mysqli_fetch_array($data)){ 
   
          $funcao = $info['id_funcao']; 
    
        
                if (in_array($funcao, $funcoes)) { 

                    $habilitacao = '1';

                    $sql = "insert into tb_habilitacao (id_membro, id_funcao, habilitacao) values ";
                    $sql .= "('$id_membro','$funcao','$habilitacao')";
        
                    $resultado2 = mysqli_query($conexao, $sql);
            
                
                } else  { 
                
                    $habilitacao = '0';

                    $sql = "insert into tb_habilitacao (id_membro, id_funcao, habilitacao) values ";
                    $sql .= "('$id_membro','$funcao','$habilitacao')";

                    $resultado2 = mysqli_query($conexao, $sql);
    
                
                }

    }   
    


        $sql  = "update tb_membro set ";
        $sql .= "voluntario='1', perfil='4'";
        $sql .= "where id_membro = '".$id_membro."'";

        $sql2  = "insert into tb_escala (cod_igreja, id_membro) values ";
        $sql2 .= "('$cod_igreja2','$id_membro2')";

         
        $resultado = mysqli_query($conexao, $sql);
        $resultado2 = mysqli_query($conexao, $sql2); 
    
        if($resultado){
            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=1'</script>";
            mysqli_close($conexao);
        }else{
            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=4'</script>";
            mysqli_close($conexao);
        }   
        
    
    
    
?>