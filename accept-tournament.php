<?php
require_once "conexao.php";
$conn = new Conexao();

$user = $_GET['user'];

$userUpgrade = $conn->conexao->prepare("UPDATE pedido_torneio SET aceito = 1 WHERE users_user = '$user'");
$userUpgrade->execute();
header("Location: admin-users.php");
?>
