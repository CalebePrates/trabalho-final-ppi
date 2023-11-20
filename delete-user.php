<?php
require_once "conexao.php";
$conn = new Conexao();

$user = $_GET['user'];

$torenioSql = $conn->conexao->prepare("DELETE FROM pedido_torneio WHERE users_user = '$user'");
$torenioSql->execute();

$userList = $conn->conexao->prepare("DELETE FROM users WHERE user = '$user'");
$userList->execute();
header("Location: admin-panel.php");
?>
