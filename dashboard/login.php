<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/login/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php include_once("mensagens.php"); ?> 
<div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Use seu e-mail previamente </p>
                <p class="description description-primary">cadastrado para criar a sua conta</p>
                <button id="signin" class="btn btn-primary">CADASTRAR</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">EVENTLY- LOGIN</h2>

                <p class="description description-second">Entre com o seu usuario e senha</p>
                <form class="form" action="data/seguranca.php" method="POST">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="email" name="usuario" placeholder="E-Mail">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueci minha senha</a>
                    <button class="btn btn-second">ACESSAR</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Já possui conta?</h2>
                <p class="description description-primary">Acesse por aqui</p>
                <button id="signup" class="btn btn-primary">Login</button>
            </div>
            <div class="second-column">
                <h3 class="title title-second">Crie sua Conta.</h3>
                <p class="description description-second">entre com e-mail e senha</p>
                <form class="form" method="POST" action="insere-cadastro.php">
                
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha1" placeholder="Senha">
                    </label>
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha2" placeholder="Confirme sua senha">
                    </label>
                    <button class="btn btn-second">CADASTRAR</button>
                    <input type="hidden" name="acao" value="insere-cadastro">
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
        <script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>
    </div>
    <script src="assets/login/js/app.js"></script>
</body>
</html>