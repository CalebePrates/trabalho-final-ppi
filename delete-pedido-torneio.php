<?php
require_once "conexao.php";
$conn = new Conexao();

$user = $_GET['user'];

$torenioSql = $conn->conexao->prepare("DELETE FROM pedido_torneio WHERE users_user = '$user'");
$torenioSql->execute();
header("Location: admin-tournament-panel.php");
?>
