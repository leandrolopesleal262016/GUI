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

$botao = $_REQUEST['botao'];

switch ($botao) {
    case 'Abre Social Externo':
        $campo = "abre_social_externo";       
        break;
    
    case 'Abre Social Interno':
        $campo = "abre_social_interno";       
        break;

    case 'Abre Garagem':
        $campo = "abre_garagem";       
        break;

    case 'Abre Subsolo':
        $campo = "abre_subsolo";       
        break;
}

$sql = "SELECT * FROM comandos LIMIT 1";
$data = $mysqli->query($sql);
$data = $data->fetch_array(MYSQLI_ASSOC);

if (empty($data)) {
    $sql = "INSERT INTO comandos (".$campo.") VALUES (1)";
    $insere = $mysqli->query($sql);
} else {
    $sql = "UPDATE comandos SET ".$campo." = 1";
    $atualiza = $mysqli->query($sql);
}

Header('Location: monitor.php');

?>