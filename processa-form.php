<?php
    session_start();
            require_once "conexao.php";
            $conn = new Conexao();
            if (isset($_POST["submit"])) {
                $verificarUsuarioSql = "SELECT * FROM users WHERE user = ?";
                $verificarUsuarioStmt = $conn->conexao->prepare($verificarUsuarioSql);
                $verificarUsuarioStmt->bindParam(1, $_POST["usuario"]);
                $verificarUsuarioStmt->execute();

                if ($verificarUsuarioStmt->rowCount() > 0) {
                    header("location:cadastro.php");
                } else {
                    //rating padrão é 1800 e padrão falso para aceito
                    $cadastrarUsuarioSql = "INSERT INTO users (user, nome, rating, senha, aceito) VALUES (?, ?,1800, ?, 0)";
                    $cadastrarUsuarioStmt = $conn->conexao->prepare($cadastrarUsuarioSql);


                    $cadastrarUsuarioStmt->bindParam(1, $_POST["usuario"]);
                    $cadastrarUsuarioStmt->bindParam(2, $_POST["nome"]);
                    $cadastrarUsuarioStmt->bindParam(3, $_POST["senha"]);
                    $cadastrarUsuarioStmt->execute();

                    header("location:login.php");
                }
        }else{
            header("location:cadastro.php");
        }

    ?>