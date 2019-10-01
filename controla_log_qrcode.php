<?php

if ($_REQUEST['arquivo'] == '') {
    $conteudo_log = file_get_contents('logqrcode/log.txt');
} else {
    $conteudo_log = file_get_contents('logqrcode/'.$_REQUEST['arquivo']);
}

$retorno = [
    'retorno' => 'ok',
    'conteudo' => $conteudo_log
];

echo json_encode($retorno);
?>