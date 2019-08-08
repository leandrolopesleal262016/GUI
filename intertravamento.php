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

$sql = "SELECT * FROM intertravamento ORDER BY id DESC LIMIT 1";
$monitor = $mysqli->query($sql);
$monitor = $monitor->fetch_array(MYSQLI_ASSOC);

if (empty($monitor)) {
    $sql = "INSERT INTO intertravamento (habilitado) VALUES (".$_REQUEST['habilitado'].")";
    $insere = $mysqli->query($sql);
} else {
    $sql = "UPDATE intertravamento SET habilitado = ".$_REQUEST['habilitado']." WHERE id = 1";
    $atualiza = $mysqli->query($sql);
}

header('Location: monitor.php');

?>