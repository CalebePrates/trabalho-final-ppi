<?php
    session_start();
            require_once "conexao.php";
            $conn = new Conexao();
            if (isset($_POST["submit"])) {
                $verificarUsuarioSql = "SELECT * FROM users WHERE user = ? and senha = ?";
                $verificarUsuarioStmt = $conn->conexao->prepare($verificarUsuarioSql);
                $verificarUsuarioStmt->bindParam(1, $_POST["usuario"]);
                $verificarUsuarioStmt->bindParam(2, $_POST["senha"]);
                $verificarUsuarioStmt->execute();

                if ($verificarUsuarioStmt->rowCount() == 0) {
                   $_SESSION ["aviso"] = "Preencha os itens corretamente";
                   header("location:login.php");
                } else {
                    if($_POST["usuario"] == "admin"){
                        header("location:admin-panel.php");
                    }else{
                        header("location:player-panel.php");
                    } 
                }
        }
    ?>