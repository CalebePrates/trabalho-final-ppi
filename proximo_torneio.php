<?php
require_once "conexao.php";

$conn = new Conexao();

// Consulta para obter a data do próximo torneio
$consultaProximoTorneio = "SELECT MIN(data) as proximo_torneio FROM torneio WHERE data > NOW()";
$resultado = $conn->conexao->query($consultaProximoTorneio);
$row = $resultado->fetch(PDO::FETCH_ASSOC);

echo json_encode($row);
?>