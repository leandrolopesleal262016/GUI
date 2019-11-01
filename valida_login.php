<?php

$server = 'localhost';
$host = 'leandro';
$senha = '5510';
$bd = 'CMM';

$mysqli = new mysqli($server, $host, $senha, $bd);

$sql = "SELECT * FROM usuarios WHERE user = '".$_REQUEST['user']."' AND password = '".$_REQUEST['password']."'";

$valida = $mysqli->query($sql);
$valida = $valida->fetch_array(MYSQLI_ASSOC);

if (!empty($valida)) {
    header('Location: index.php');
} else {
    header('Location: login.html');
}



