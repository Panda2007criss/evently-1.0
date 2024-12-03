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

   
    for ($i = 0; $i < $id_contador; $i++){

        $sql = "insert into tb_escala (cod_igreja, id_evento, id_funcao, id_membro) values ";
        $sql .= "('$cod_igreja','$id_evento','{$funcoes_post[$i]}','{$voluntarios_post[$i]}')";
     
        $resultado = mysqli_query($conexao, $sql);
        
     }
    


     $data = mysqli_query($conexao, "select * from tb_membro WHERE voluntario = '1' ");
       while($info = mysqli_fetch_array($data)){ 
   
          $membro2 = $info['id_membro']; 
    
        
                if (in_array($membro2, $voluntarios)) { 

                    $disponibilidade = '0';

                    $sql = "insert into tb_disponibilidade (id_evento, id_membro, disponibilidade) values ";
                    $sql .= "('$id_evento','$membro2','$disponibilidade')";
        
                    $resultado3 = mysqli_query($conexao, $sql);
            
                
                } else  { 
                
                    $disponibilidade = '1';

                    $sql = "insert into tb_disponibilidade (id_evento, id_membro, disponibilidade, cod_igreja) values ";
                    $sql .= "('$id_evento','$membro2','$disponibilidade','$cod_igreja')";
        
                    $resultado3 = mysqli_query($conexao, $sql);
    
                
                }

    }   

     if($resultado){
        header('Location: dashboard.php?page=lista_escala&msg=1');
        mysqli_close($conexao);
    }else{
        header('Location: dashboard.php?page=lista_escala&msg=4');
        mysqli_close($conexao);
    }

    


   

 









    
?>


