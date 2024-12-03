<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <style>
        body {
            background-color: #5521B5;
            color: #fff;
        }

        .form-container {
            background: #fff;
            color: #000;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <main>
        <section class="min-vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="form-container">
                            <h1 class="text-center mb-4">Faça o Cadastro para acessar a plataforma</h1>
                            <form action="cliente/insere_cliente.php" method="POST">
                            
                                <div class="mb-3">
                                    <label for="nome_completo" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome_completo" name="nome_completo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="funcao_membro" class="form-label">Função</label>
                                    <input type="text" class="form-control" id="funcao_membro" name="funcao_membro" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="dt_nasc" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="dt_nasc" name="dt_nasc" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <select class="form-select" id="sexo" name="sexo" required>
                                            <option value="">Selecione</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="rg" class="form-label">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                                    </div>
                                </div>
                                <hr>
                              
                                <h2 class="h5">Dados da Igreja</h2>
                                <div class="mb-3">
                                    <label for="nome_igreja" class="form-label">Nome da Igreja</label>
                                    <input type="text" class="form-control" id="nome_igreja" name="nome_igreja" required>
                                </div>
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="denominacao" class="form-label">Denominação</label>
                                        <input type="text" class="form-control" id="denominacao" name="denominacao" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="capacidade" class="form-label">Capacidade</label>
                                        <input type="text" class="form-control" id="capacidade" name="capacidade" required>
                                    </div>
                                </div>
                                <hr>
                           
                                <h2 class="h5">Dados de Acesso</h2>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="senha1" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha1" name="senha1" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="senha2" class="form-label">Confirme a Senha</label>
                                        <input type="password" class="form-control" id="senha2" name="senha2" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #5521B5;">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {
         
            $('#rg').inputmask("99.999.999-9");
            
               $('#cpf').inputmask("999.999.999-99");
           
            $('#telefone').inputmask("(99) 99999-9999");
        });
    </script>
</body>

</html>

