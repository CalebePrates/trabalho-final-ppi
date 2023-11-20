<?php
    session_start();
            require_once "conexao.php";
            $conn = new Conexao();
            
                    $cadastrarTorneioSql = "INSERT INTO torneio (nome, data) VALUES (?, ?)";
                    $cadastrarTorneioStmt = $conn->conexao->prepare($cadastrarTorneioSql);


                    $cadastrarTorneioStmt->bindParam(1, $_POST["nometorneio"]);
                    $cadastrarTorneioStmt->bindParam(2, $_POST["data"]);
                    $cadastrarTorneioStmt->execute();

                    header("location:admin-panel.php");
                
        

    ?>