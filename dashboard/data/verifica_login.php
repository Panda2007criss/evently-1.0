<?php

if(!$_SESSION['usuario']){
	header('Location:login.php?acao=Login&msg=3');
	exit();
};