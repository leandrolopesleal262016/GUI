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

$sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 1";
$entradas = $mysqli->query($sql);
$entrada = $entradas->fetch_array(MYSQLI_ASSOC);

if (empty($entrada)) {
    $sql = "INSERT INTO entradas(
        pm_social,
        pm_eclusa,
        abre_social,
        abre_eclusa,
        btn_social,
        btn_eclusa,
        qbv_comunica,
        qbv_abre,
        chave_mud,
        qde,
        pm_quadro,
        alarme,
        sauda
    ) VALUES (
        '".$_REQUEST['pm_social_entrada']."',
        '".$_REQUEST['pm_eclusa_entrada']."',
        '".$_REQUEST['abre_social_entrada']."',
        '".$_REQUEST['abre_eclusa_entrada']."',
        '".$_REQUEST['btn_social_entrada']."',
        '".$_REQUEST['btn_eclusa_entrada']."',
        '".$_REQUEST['qbv_comunica_entrada']."',
        '".$_REQUEST['qbv_abre_entrada']."',
        '".$_REQUEST['chave_mud_entrada']."',
        '".$_REQUEST['qde_entrada']."',
        '".$_REQUEST['pm_quadro_entrada']."',
        '".$_REQUEST['alarme_entrada']."',
        '".$_REQUEST['sauda_entrada']."'
    )";
    $insere_entradas = $mysqli->query($sql);
} else {
    $sql = "UPDATE entradas 
    SET pm_social='".$_REQUEST['pm_social_entrada']."',
    pm_eclusa='".$_REQUEST['pm_eclusa_entrada']."',
    abre_social='".$_REQUEST['abre_social_entrada']."',
    abre_eclusa='".$_REQUEST['abre_eclusa_entrada']."',
    btn_social='".$_REQUEST['btn_social_entrada']."',
    btn_eclusa='".$_REQUEST['btn_eclusa_entrada']."',
    qbv_comunica='".$_REQUEST['qbv_comunica_entrada']."',
    qbv_abre='".$_REQUEST['qbv_abre_entrada']."',
    chave_mud='".$_REQUEST['chave_mud_entrada']."',
    qde='".$_REQUEST['qde_entrada']."',
    pm_quadro='".$_REQUEST['pm_quadro_entrada']."',
    alarme='".$_REQUEST['alarme_entrada']."',
    sauda='".$_REQUEST['sauda_entrada']."'
    WHERE
        id = 1";
    $update_entradas = $mysqli->query($sql);
}

$sql = "SELECT * FROM saidas ORDER BY id DESC LIMIT 1";
$saidas = $mysqli->query($sql);
$saida = $saidas->fetch_array(MYSQLI_ASSOC);

if (empty($saida)) {
    $sql = "INSERT INTO saidas (
        abre_social,
        abre_eclusa,
        bloqueia_social,
        bloqueia_eclusa,
        foto,
        sirene,
        luz_automatica,
        exaustor_1,
        exaustor_2,
        luz_1,
        luz_2,
        bomba,
        aux_1,
        aux_2,
        aux_3,
        aux_4,
        garagem_terreo,
        garagem_sub_1,
        garagem_sub_2,
        garagem_sub_3,
        portal_acesso_1,
        portal_acesso_2
    ) VALUES (
        '".$_REQUEST['abre_social_saida']."',
        '".$_REQUEST['abre_eclusa_saida']."',
        '".$_REQUEST['bloqueia_social_saida']."',
        '".$_REQUEST['bloqueia_eclusa_saida']."',
        '".$_REQUEST['foto_saida']."',
        '".$_REQUEST['sirene_saida']."',
        '".$_REQUEST['luz_automatica_saida']."',
        '".$_REQUEST['exaustor_1_saida']."',
        '".$_REQUEST['exaustor_2_saida']."',
        '".$_REQUEST['luz_1_saida']."',
        '".$_REQUEST['luz_2_saida']."',
        '".$_REQUEST['bomba_saida']."',
        '".$_REQUEST['aux_1_saida']."',
        '".$_REQUEST['aux_2_saida']."',
        '".$_REQUEST['aux_3_saida']."',
        '".$_REQUEST['aux_4_saida']."',
        '".$_REQUEST['garagem_terreo_saida']."',
        '".$_REQUEST['garagem_sub_1_saida']."',
        '".$_REQUEST['garagem_sub_2_saida']."',
        '".$_REQUEST['garagem_sub_3_saida']."',
        '".$_REQUEST['portal_acesso_1_saida']."',
        '".$_REQUEST['portal_acesso_2_saida']."'
    )";
    
    $insere_saidas = $mysqli->query($sql);
} else {
    $sql = "UPDATE saidas 
    SET abre_social='".$_REQUEST['abre_social_saida']."',
    abre_eclusa='".$_REQUEST['abre_eclusa_saida']."',
    bloqueia_social='".$_REQUEST['bloqueia_social_saida']."',
    bloqueia_eclusa='".$_REQUEST['bloqueia_eclusa_saida']."',
    foto='".$_REQUEST['foto_saida']."',
    sirene='".$_REQUEST['sirene_saida']."',
    luz_automatica='".$_REQUEST['luz_automatica_saida']."',
    exaustor_1='".$_REQUEST['exaustor_1_saida']."',
    exaustor_2='".$_REQUEST['exaustor_2_saida']."',
    luz_1='".$_REQUEST['luz_1_saida']."',
    luz_2='".$_REQUEST['luz_2_saida']."',
    bomba='".$_REQUEST['bomba_saida']."',
    aux_1='".$_REQUEST['aux_1_saida']."',
    aux_2='".$_REQUEST['aux_2_saida']."',
    aux_3='".$_REQUEST['aux_3_saida']."',
    aux_4='".$_REQUEST['aux_4_saida']."',
    garagem_terreo='".$_REQUEST['garagem_terreo_saida']."',
    garagem_sub_1='".$_REQUEST['garagem_sub_1_saida']."',
    garagem_sub_2='".$_REQUEST['garagem_sub_2_saida']."',
    garagem_sub_3='".$_REQUEST['garagem_sub_3_saida']."',
    portal_acesso_1='".$_REQUEST['portal_acesso_1_saida']."',
    portal_acesso_2='".$_REQUEST['portal_acesso_2_saida']."'
    WHERE
        id = 1";
    $update_saidas = $mysqli->query($sql);
}

header('Location: setup.php');
?>
