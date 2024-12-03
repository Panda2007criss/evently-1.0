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

    $sql3 = "delete from tb_escala where id_evento = '$id_evento';"; 
    $resultado3 = mysqli_query($conexao, $sql3)or die(mysqli_error());
   
    for ($i = 0; $i < $id_contador; $i++){

        $sql = "insert into tb_escala (cod_igreja, id_evento, id_funcao, id_membro) values ";
        $sql .= "('$cod_igreja','$id_evento','{$funcoes_post[$i]}','{$voluntarios_post[$i]}')";
     
        $resultado = mysqli_query($conexao, $sql);
        
     }
    

     if($resultado){
        header('Location: dashboard.php?page=lista_escala&msg=2');
        mysqli_close($conexao);
    }else{
        header('Location: dashboard.php?page=lista_escala&msg=4');
        mysqli_close($conexao);
    }

    


   

 









    
?>


