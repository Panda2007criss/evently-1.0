<?php
include_once('data/conexao.php');


$data = mysqli_query($conexao, "select id_funcao from tb_funcao;") or die(mysqli_error("ERRO: ".$conexao));




$funcao = [];

foreach($data as $dt){

  echo $dt=>id_funcao;
     
    
}












?>




