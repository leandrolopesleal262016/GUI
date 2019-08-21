<?php

$server = 'localhost';
$host = 'leandro';
$senha = '5510';
$bd = 'CMM';

$mysqli = new mysqli($server, $host, $senha, $bd);

if(mysqli_connect_errno()){
	echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
	exit();
}

$sql = "SELECT * FROM status LIMIT 1";
$status = $mysqli->query($sql);
$status = $status->fetch_array(MYSQLI_ASSOC);

echo json_encode($status);
?>