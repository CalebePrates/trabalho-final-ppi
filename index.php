<?php
require_once("conexao.php");

$conn = new Conexao();

$sql = "SELECT user,rating FROM users WHERE aceito = true ORDER BY rating DESC";
$result = $conn->conexao->query($sql);
$usuarios = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LXUFU</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-dark bg-dark border-bottom border-body" data-bs-theme="dark">
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
        <section>
            <div id="slider" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/xadrez.jpg" class="d-block w-100 imagem-slide" alt="xadrez">
                    <div class="carousel-caption d-none d-md-block ">
                      <h5 class="carousel-textos">Boas Vindas a Liga de Xadrez da UFU</h5>
                      <p class="carousel-textos">Liga criada por frequentadores do Centro de Convivência (CC) da Universidade Federal de Uberlândia (UFU), com o objetivo de promover torneios e incentivar o estudo de xadrez entre os membros.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/tabuleiro.jpeg" class="d-block w-100 imagem-slide" alt="xadrez">
                    <div class="carousel-caption d-none d-md-block ">
                      <h5 class="carousel-textos">Liga de Xadrez da UFU</h5>
                      <p class="carousel-textos">A liga foi criada em agosto de 2023 por estudantes da UFU, com o intuito de promover a prática do xadrez de uma maneira mais organizada, através de torneios mensais e da criação de um rating interno para incentivar os membros da liga a se preparem para outros torneios universitários de maior expressão.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/galera.jpeg" class="d-block w-100 imagem-slide" alt="xadrez">
                    <div class="carousel-caption d-none d-md-block  ">
                      <h5 class="carousel-textos">Amantes do Esporte!</h5>
                      <p class="carousel-textos">Somos universitários apaixonados pelo Xadrez e queremos sempre promover a esse esporte no ambiente universitário afetando tanto pessoas dentro do ambiente universitário quanto as que não estão, junte-se a nós!.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        <section>
        <!----------------------------------------------------Contador----------------------------------------------------- -->
        <section class='contador'>
            <div class='titulo_countdown1'>
                <h1 class="text-white">Próximo Torneio Xadrez</h1>
            </div>

            <div class='countdown_1'>
                <div class='time_1'>
                <h2 id="day"></h2>
                <small class="text-white">Dias</small>
                </div>

                <div class='time_1'>
                <h2 id="hour"></h2>
                <small class="text-white">Horas</small>
                </div>

                <div class='time_1'>
                <h2 id="minute" class='minute'></h2>
                <small class="text-white">Minutos</small>
                </div>

                <div class='time_1'>
                    <h2 id='second'></h2>
                <small class="text-white">Segundos</small>
                </div> 
            </div>
            <!------------------------------------RATING TABELA------------------------------------------>
            <div class="table-responsive rating" id="rating-table">
              <table class="table table-striped table-bordered table-hover table-dark table-fixed">
                  <thead class="table-dark">
                      <tr>
                          
                          <th>Nome</th>
                          <th>LXUFU Rating</th>
                      </tr>
                  </thead>
                  <tbody>
                  <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                           
                              </th>
                                <td><?= $usuario['user'] ?></td>
                                <td><?= $usuario['rating'] ?></td>
                            </tr>
                        <?php endforeach; ?>    
                      </tbody>
                      <!-- Adicione mais linhas de jogadores conforme necessário -->
                  </tbody>
              </table>
            </div>
        </section>
        <!-------------------------Sobre nós---------------------------------------->
        <section class="row justify-content-center">
            <div class="col-xl-6 section-aboutus">
              <img src="./images/torneio.jpeg" class="card-img-top img-fluid " alt="...">
            </div>
            <div class="col-xl-6 section-aboutus">
                <div class="box-about">
                    <h1 class="d-flex justify-content-center title-section">SOBRE NÓS</h1>
                    <p >Somos uma organização sem fins lucrativos, sem lideranças, cujo objetivo é fomentar o esporte xadrez na comunidade que frequenta a Universidade Federal de Uberlândia, através da liga quinzenal, que revezará entre online e presencial, produziremos um rating da UFU, que será público, e atualizado quinzenalmente, montando assim uma classificação geral dos atletas. Um agradecimento especial a todos que nos auxiliam no projeto, inclusive jogando conosco. Participe você também.</p>

                </div>
            </div>
        </section>
    
        <!------------------------------Imagens-------------------------------------------------->
        <section class="row justify-content-center text-center" id="section-gallery">
          <h1 class="text-white">Imagens dos torneios</h1>
          <div class="row col-xl-12">
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/torneio.jpeg" class="card-img-top img-fluid" alt="Imagem 1">
                </div>
            </div>
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/galera.jpeg" class="card-img-top  img-fluid" alt="Imagem 3">
                </div>
            </div>
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/torneio.jpeg" class="card-img-top card-img-top img-fluid" alt="Imagem 2">
                </div>
            </div>
          </div>
          <div class="row col-xl-12">
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/torneio.jpeg" class="card-img-top img-fluid" alt="Imagem 1">
                </div>
            </div>
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/galera.jpeg" class="   card-img-top  img-fluid" alt="Imagem 3">
                </div>
            </div>
            <div class="gallery-item col-xl-4">
                <div class="card">
                    <img src="./images/torneio.jpeg" class="  card-img-top card-img-top img-fluid" alt="Imagem 2">
                </div>
            </div>
          </div>
        </section>
        <!-------------------------------------Localização Liga Xadrez UFU----------------------------------->
        <section id="section-localization" class="row justify-content-center">
            <div class="col-xl-6">
              <iframe class="mapa card-img-top img-fluid "  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2911251321884!2d-48.26277726343401!3d-18.9185038431657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a4450b20d8e723%3A0x144129dbf33dcbb8!2sAv.%20Jo%C3%A3o%20Naves%20de%20%C3%81vila%2C%202121%20-%20Santa%20M%C3%B4nica%2C%20Uberl%C3%A2ndia%20-%20MG%2C%2038408-144!5e0!3m2!1spt-BR!2sbr!4v1697326327278!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-xl-6 box-loc">
                <h1 class="d-flex justify-content-center title-section">LOCALIZAÇÃO</h1>
                <p>Torneios e jogos geralmente acontecem nos blocos da UFU do Campus Santa Mônica e valem Rating da LXUFU para a criação do Raking, a sala, bloco e horário das partidadas são acordadas no grupo!</p>
            </div>
        </section>
  
   
    </main>
    <!-------------------------------------Rodapé da página------------------------------------------------->
    <footer class="row justify-content-center">
        <div class="col-xl-4">
            <p>Contatos</p>
            <p>ligaxadrezufu@gmail.com</p>
        </div>
        <div class="col-xl-4">
            <ul class="row">
                <li class="col"><a href="#rating-table">Rating</a></li>
                <li class="col"><a href="#section-gallery">Fotos</a></li>
            </ul>
        </div>
        <div class="col-xl-4" id="redes-socias">
            <div class="d-flex justify-content-end">
                <a  href="https://www.instagram.com">
                    <span>Instagram</span>
                </a>
            </div> 
        </div>
    </footer>
    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>