<?php
function token($tamanho=10, $id="", $up=false) {
    $characters = $id.'abcdefghijklmnopqrstuvwxyz0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    if($up === true) {
      return strtoupper($id.$randomString);
    } else {
      return $id.$randomString;
    }
  }
  
  
  $token = token(25); // Gera um token com 30 caracteres, com prefixo

  echo $token;

?>