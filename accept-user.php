<?php
require_once "conexao.php";
$conn = new Conexao();

$user = $_GET['user'];

$userUpgrade = $conn->conexao->prepare("UPDATE users SET aceito = 1 WHERE user = '$user'");
$userUpgrade->execute();
header("Location: admin-users.php");
?>
