<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LXUFU</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand col-4" href="#">Painel Jogador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="alert alert-info col-4" role="alert">
                    Falta XX:XX para encerrar as inscrições!
                </div>
                <!-- AO CLICAR NO BOTÃO, ENCERRAR SESSAO DO PHP -->
                <div class="collapse navbar-collapse col-4" id="div-logout">
                    <div class="navbar-nav p-2">
                        <a class="nav-link" href="index.php">Sair do painel</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="row" id="main-tournament">
        <section class="col-sm-12 col-md-8 col-xl-6" id="section-apply-tournament">
            <h2>Solicitar entrada no torneio:</h2>
            <form class="mb-3">
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" role="switch" id="apply">
                  <label class="form-check-label" for="apply">Vai participar do torneio?</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar pedido</button>
            </form>
            
            <div class="alert alert-success" role="alert" style="display: none;">
                Você está dentro!
            </div>
        </section>
    </main>
    <footer>
        <div>
            <p>Localização da empresa</p>
            <p>Localização da empresa</p>
            <p>Localização da empresa</p>
            <p>Localização da empresa</p>
        </div>
        <div>
            <ul>
                <li><a href="#slider">Inicio</a></li>
                <li><a href="#section-galeria">Fotos</a></li>
            </ul>
        </div>
        <div id="redes-socias">
            <div>
                <a href="">
                    <img class="imagem-footer" src="images/logo-instagram.png" alt="logo instagram">
                    <span>Instagram</span>
                </a>
            </div>
            <div>
                <a href="">
                    <img class="imagem-footer" src="images/logo-instagram.png" alt="logo instagram">
                    <span>Instagram</span>
                </a>
            </div>
            <div>
                <a href="">
                    <img class="imagem-footer" src="images/logo-instagram.png" alt="logo instagram">
                    <span>Instagram</span>
                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>