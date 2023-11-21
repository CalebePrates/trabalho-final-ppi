<?php
    session_start();
    require_once "conexao.php";
    $conn = new Conexao();

    if (isset($_POST["submit"])) {
        $user = $_POST["usuario"];
        echo $user;
        $verificarUsuarioSql = "SELECT * FROM users WHERE user = ?";
        $verificarUsuarioStmt = $conn->conexao->prepare($verificarUsuarioSql);
        $verificarUsuarioStmt->bindValue(1, $user, PDO::PARAM_STR);
        $verificarUsuarioStmt->execute();

        if ($verificarUsuarioStmt->rowCount() == 0) {
            header("location: login.php");
        } else { 
            $proximoTorneioSql = "SELECT nome FROM torneio WHERE data > NOW() ORDER BY data ASC LIMIT 1";
            $proximoTorneioStmt = $conn->conexao->query($proximoTorneioSql);
            $proximoTorneioNome = $proximoTorneioStmt->fetchColumn();

            $pedidoTorneioSql = "INSERT INTO pedido_torneio (torneio_nome, users_user, aceito) VALUES ('$proximoTorneioNome', '$user', 0)";
            $pedidoTorneioStmt = $conn->conexao->prepare($pedidoTorneioSql);
            $pedidoTorneioStmt->execute();
            header("location: index.php");
        }
    } else {
        header("location: login.php");
    }
?>
