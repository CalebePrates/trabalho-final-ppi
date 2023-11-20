<?php
    session_start();
            require_once "conexao.php";
            $conn = new Conexao();
            if (isset($_POST["submit"])) {
                $user = $_GET['user'];
                $verificarUsuarioSql = "SELECT * FROM users WHERE user = ?";
                $verificarUsuarioStmt = $conn->conexao->prepare($verificarUsuarioSql);
                $verificarUsuarioStmt->bindParam(1, $_POST["usuario"]);
                $verificarUsuarioStmt->execute();
                if ($verificarUsuarioStmt->rowCount() > 0) {
                    header("location:login.php");
                } else {
                    $proximoTorneioSql = "SELECT nome FROM torneio WHERE data > NOW() ORDER BY data ASC LIMIT 1";
                    $proximoTorneioStmt = $conn->conexao->query($proximoTorneioSql);
                    $proximoTorneioNome = $proximoTorneioStmt->fetchColumn();
                    //rating padrão é 1800 e padrão falso para aceito
                    $pedidoTorneioSql = "INSERT INTO pedido_torneio (torneio_nome, users_user, aceito) VALUES ($proximoTorneioNome ,$user,0)";
                    $pedidoTorneioStmt = $conn->conexao->prepare($pedidoTorneioSql);
                    $pedidoTorneioStmt->execute();
                }
        }else{
            header("location:login.php");
        }

    ?>