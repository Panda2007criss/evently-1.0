<?php
    include "data\conexao.php";

    $id_membro      = $_POST["id_membro"];
    $funcoes        = $_POST['F_funcoes'];


    $data = mysqli_query($conexao, "select * from tb_funcao");
       while($info = mysqli_fetch_array($data)){ 
   
          $funcao = $info['id_funcao']; 
    
        
                if (in_array($funcao, $funcoes)) { 

                    $habilitacao = '1';

                    $sql = "update tb_habilitacao set ";
                    $sql .= "habilitacao='".$habilitacao."' ";
                    $sql .= "where id_funcao = '".$funcao."' AND id_membro = '".$id_membro."' ";
        
                    $resultado2 = mysqli_query($conexao, $sql);
            
                
                } else  { 
                
                    $habilitacao = '0';

                    $sql = "update tb_habilitacao set ";
                    $sql .= "habilitacao='".$habilitacao."' ";
                    $sql .= "where id_funcao = '".$funcao."' AND id_membro = '".$id_membro."' ";
        
                    $resultado2 = mysqli_query($conexao, $sql);
    
                
                }

    }   
    
        
        $resultado2 = mysqli_query($conexao, $sql);
    
        if($resultado2){
            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=2'</script>";
            mysqli_close($conexao);
        }else{
            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_voluntario&msg=4'</script>";
            mysqli_close($conexao);
        }   
?>

