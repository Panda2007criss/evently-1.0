<?php
session_start();
session_destroy();
header('Location: ../login.php?acao=Login&msg=2');
exit();