<?php
class Conexao {
    public $conexao;

    function __construct() {
        if (!isset($this->conexao)) {
            try {
                $this->conexao = new PDO('mysql:host=localhost;dbname=meubanco', 'root', '');
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }   
    }

    function fecharConexao(){
        if (isset($this->conexao)) {
            $this->conexao = null;
        }
    }
}
?>