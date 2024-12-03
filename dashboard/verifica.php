 <?php
include "data\conexao.php";

 $id_membro          = $_POST['id_voluntario'];
 $id_voluntario    = $id_membro;
 $funcoes = $_POST['F_funcoes'];
 
 $data = mysqli_query($conexao, "select * from tb_funcao");
 while($info = mysqli_fetch_array($data)){ 
   

     $funcao = $info['id_funcao'];

 

if (in_array($funcao, $funcoes)) { 

    echo "Habilitado</br>";

} else  { 

    echo "Não é Habilitado</br>";

}
     
 };

?>

   
