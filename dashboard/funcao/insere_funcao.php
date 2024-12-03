<?php
    include_once('data/conexao.php');

    $descricao_funcao  = $_POST["descricao_funcao"];
    $descricao_funcao2 = $descricao_funcao;
    $cor_funcao  = $_POST["cor_funcao"];
    $cod_igreja  = $_SESSION["cod_igreja"];
    $equipamento = $_POST["equipamento"];


    $sql = "insert into tb_funcao (cod_igreja, descricao_funcao, cor_funcao, id_equipamento) values ";
    $sql .= "('$cod_igreja','$descricao_funcao','$cor_funcao','$equipamento')";

    $resultado = mysqli_query($conexao, $sql);

    $data = mysqli_query($conexao, "select * from tb_funcao WHERE descricao_funcao LIKE '".$descricao_funcao2."' ");
       while($info = mysqli_fetch_array($data)){ 
           
           $id_funcao = $info['id_funcao'];
       }
                            
                            $data = mysqli_query($conexao, "select * from tb_membro WHERE voluntario = '1' ");
                            while($info = mysqli_fetch_array($data)){ 
                        
                               $membro2 = $info['id_membro']; 
                         

                                         $habilitacao = '0';
                     
                                         $sql = "insert into tb_habilitacao (id_membro, id_funcao, habilitacao) values ";
                                         $sql .= "('$membro2','$id_funcao','$habilitacao')";
                             
                                         $resultado3 = mysqli_query($conexao, $sql);
                                       
                     
                         } 

                        if($resultado){
                            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=1'</script>";
                            mysqli_close($conexao);
                        }else{
                            echo "<script language='javaScript'>window.location.href='dashboard.php?page=lista_funcao&msg=4'</script>";
                            mysqli_close($conexao);
                        }                               
       

   
?>