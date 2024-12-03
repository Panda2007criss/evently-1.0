
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>123</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title">
<meta name="author" content="Themesberg">
<meta name="description" content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg">
<meta name="keywords" content="bootstrap, bootstrap 5, bootstrap 5 one page, bootstrap 5 mobile application, one page template, bootstrap 5 one page template, themesberg, themesberg one page, one page template bootstrap 5" />
<link rel="canonical" href="https://themesberg.com/product/bootstrap/swipe-free-mobile-app-one-page-bootstrap-5-template">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://demo.themesberg.com/swipe/">
<meta property="og:title" content="Swipe - Mobile App One Page Bootstrap 5 Template">
<meta property="og:description" content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg">
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/swipe/swipe-thumbnail.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://demo.themesberg.com/swipe/">
<meta property="twitter:title" content="Swipe - Mobile App One Page Bootstrap 5 Template">
<meta property="twitter:description" content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg">
<meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/swipe/swipe-thumbnail.jpg">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="login/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="login/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="login/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="login/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="login/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="login/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Swipe CSS -->
<link type="text/css" href="login/css/swipe.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <main>
        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow border rounded border-light w-100">
                        <?php include_once("mensagens-cad.php"); ?>
                            <div class="row gx-0 align-items-center justify-content-between">
                            <div class="col-6 col-lg-4 d-none d-lg-block rounded-left">
                                    <img src="login/assets/img/img-usuario.png" alt="login image">
                                </div>
                                <div class="col-12 col-lg-7 px-3 py-5 px-sm-5 px-md-6">
                                    <div class="text-center text-md-center mb-4 mt-md-0">
                                        <h1 class="mb-0 h3">Crie Sua Conta</h1>
                                    </div>
                                    <form action="insere-cadastro.php" method="POST">
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmailCard3">Seu E-Mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                                <input type="email" name="email" class="form-control" placeholder="Seu e-mail" id="exampleInputEmailCard3">
                                            </div>  
                                        </div>
                                        <!-- End of Form -->
                                        <div class="form-group">
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <label for="exampleInputPasswordCard4">Sua Senha</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                                    <input type="password" name="senha1" placeholder="Senha" class="form-control" id="exampleInputPasswordCard4">
                                                </div>  
                                            </div>
                                            <!-- End of Form -->
                                            <!-- Form -->
                                            <div class="form-group mb-4">
                                                <label for="exampleInputPasswordCard4">Confirme a Senha</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                                    <input type="password" name="senha2" placeholder="Confirme a Senha" class="form-control" id="exampleInputPasswordCard5">
                                                </div>  
                                            </div>
                                            <!-- End of Form -->
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                                <label class="form-check-label" for="defaultCheck6">
                                                    Eu Aceito os<a href="#" class="text-primary font-weight-bold">termos e condições</a>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary">Cadastrar</button>
                                        <input type="hidden" name="acao" value="insere-cadastro">
                                    </form>
                                    <div class="d-flex justify-content-center align-items-center mt-4">
                                        <span class="font-weight-normal">
                                           Já possue conta?
                                            <a href="login.php" class="font-weight-bold">Clique Aqui para Acessar o Sistema</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="login/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="login/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="login/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="login/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="login/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Swipe JS -->
<script src="login/assets/js/swipe.js"></script>

</body>

</html>