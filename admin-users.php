<?php
    require_once("conexao.php");

    $conn = new Conexao();

    $sql = "SELECT user,nome,rating FROM users WHERE aceito = true ORDER BY rating DESC";
    $result = $conn->conexao->query($sql);
    $usuarios = $result->fetchAll(PDO::FETCH_ASSOC);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        header("Location: login.php");
    }
?>
<!Doctype html>
  <html lang="pt-BR">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>LXUFU</title>
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/admin-panel.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
      <header class="col-xl-2">
          <nav>
              <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="navbar-admin">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Painel ADMIN</span>
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="admin-panel.php" class="nav-link text-white" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Pedidos de acesso
                  </a>
                </li>
                <li>
                  <a href="admin-tournament-panel.php" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Pedidos de torneio
                  </a>
                </li>
                <li>
                  <a href="admin-users.php" class="nav-link active">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Usuários
                  </a>
                </li>
              </ul>
              <hr>
              <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="index.php">Sair do painel</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </header>
      <main class="col-xl-10" id="main-admin">
          <section class="col-sm-12" id="table-listing">
              <div class="d-flex box-pesquisa">
                <input type="text" id="myInput" onkeyup="searchElement()" placeholder="Encontre o usuário..." title="Type in a name">
                <button type="button" class="btn btn-danger">Excluir</button>
              </div>
              <div>    
                  <table id="usersTable" class="table table-striped table-hover table-bordered ">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th class="posicao">Usuario</th>
                          <th>Nome</th>
                          <th>LXUFU Rating</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                              <th scope="row">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="">
                                  </div>
                              </th>
                                <td><?= $usuario['user'] ?></td>
                                <td><?= $usuario['nome'] ?></td>
                                <td><?= $usuario['rating'] ?></td>
                            </tr>
                        <?php endforeach; ?>    
                      </tbody>
                  </table>
                </div>
          </section>
      </main>
      <script>
          $(document).ready(function () {
              $('#usersTable').DataTable();
          });
      </script>
      <script src="js/table-search.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>