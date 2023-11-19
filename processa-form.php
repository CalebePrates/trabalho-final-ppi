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
                    echo '<div class="alert alert-danger" role="alert">Usuário já cadastrado. Escolha outro nome de usuário.</div>';
                } else {
                    //rating padrão é 1800
                    $cadastrarUsuarioSql = "INSERT INTO solicitantes (user, nome, rating, senha) VALUES (?, ?,1800, ?)";
                    $cadastrarUsuarioStmt = $conn->conexao->prepare($cadastrarUsuarioSql);


                    $cadastrarUsuarioStmt->bindParam(1, $_POST["usuario"]);
                    $cadastrarUsuarioStmt->bindParam(2, $_POST["nome"]);
                    $cadastrarUsuarioStmt->bindParam(3, $_POST["senha"]);
                    $cadastrarUsuarioStmt->execute();

                    echo "Cadastro realizado com sucesso. Faça o login agora.";
                }
        }else{
            echo '<div class="alert alert-danger" role="alert">Campos de senha e cofirma senha devem ser iguais.</div>';
        }

    ?>