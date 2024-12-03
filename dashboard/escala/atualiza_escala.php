<?php
    include_once('data/conexao.php');

    $cod_igreja  = $_SESSION['cod_igreja'];
    $id_evento   = $_POST['id_evento'];
    $id_contador = $_POST['cont'];

    if(isset($_POST['funcao'])){
             $funcoes = $_POST['funcao'];

             foreach ($funcoes as $funcao){
                $funcoes_post[] = $funcao;
             }
    }

    if(isset($_POST['id_membro'])){
        $voluntarios = $_POST['id_membro'];

        foreach ($voluntarios as $voluntario){
           $voluntarios_post[] = $voluntario;
        }
    }


   
    for ($i = 0; $i <= $id_contador; $i++){

        $sql = "update tb_escala set ";
        $sql .= "id_membro='{$voluntarios_post[$i]}'";
        $sql .= "where id_funcao = '{$funcoes_post[$i]}' AND id_evento = '".$id_evento."' ";
     
        $resultado = mysqli_query($conexao, $sql);
        
     }
    

     $sql3 = "delete from tb_disponibilidade where id_evento = '$id_evento';"; 
     $resultado3 = mysqli_query($conexao, $sql3)or die(mysqli_error());


     $data = mysqli_query($conexao, "select * from tb_membro WHERE voluntario = '1' and cod_igreja = '".$_SESSION['cod_igreja']."' ");
       while($info = mysqli_fetch_array($data)){ 
   
          $membro2 = $info['id_membro']; 
    
        
                if (in_array($membro2, $voluntarios)) { 

                    $disponibilidade = '0';

                    $sql = "insert into tb_disponibilidade (id_evento, id_membro, disponibilidade, cod_igreja) values ";
                    $sql .= "('$id_evento','$membro2','$disponibilidade','$cod_igreja')";
        
                    $resultado3 = mysqli_query($conexao, $sql);
            
                
                } else  { 
                
                    $disponibilidade = '1';

                    $sql = "insert into tb_disponibilidade (id_evento, id_membro, disponibilidade, cod_igreja) values ";
                    $sql .= "('$id_evento','$membro2','$disponibilidade','$cod_igreja')";
        
                    $resultado3 = mysqli_query($conexao, $sql);
    
                
                }

    }   


     if($resultado){
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_escala&msg=2'</script>";
        mysqli_close($conexao);
    }else{
        echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_escala&msg=4'</script>";
        mysqli_close($conexao);
    }

    


   

 









    
?>


