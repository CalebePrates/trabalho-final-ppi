<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LXUFU</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LXUFU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Painel
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Entrar</a></li>
                        <li><a class="dropdown-item" href="cadastro.php">Solicitar acesso</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="row " id="section-login">
            <form method='POST'action="processa-form.php" class="col-sm-12 col-md-8 col-xl-6 container center ">
                        <div  class="card">
                            <h1 class="text-white">SOLICITAR ACESSO LXUFU </h1>
                            <div id="msgError"></div>
                            <div id="msgSuccess"></div>
            
                            <div class="label-float">
                                <input type="text" id="nome" name="nome" placeholder="" required autocomplete="off">
                                <label id="labelNome" for="nome">Nome</label>
                            </div>
            
                            <div class="label-float">
                                <input type="text" id="usuario"name="usuario" placeholder="" required autocomplete="off">
                                <label id="labelUsuario" for="usuario">Usuário</label>
                            </div>
            
                            <div class="label-float">
                                <input type="password" name="senha" id="senha" required autocomplete="off" >
                                <label id="labelSenha" for="senha">Senha</label>
                                <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
                            </div>
            
                            <div class="label-float">
                                <input type="password" name="senha1" id="confirmaSenha" required  autocomplete="off">
                                <label id="labelConfirmaSenha" for="confirmaSenha">Confirmar Senha</label>
                                <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
                            </div>
            
                            <div class="justify-center">
                                <button class="btn btn-success" id="btnCadastro" name="submit" onclick="validar()">Solicitar Acesso</button>
                            </div>
                        </div>
            <script src="js/cadastro.js"></script> 
              </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>