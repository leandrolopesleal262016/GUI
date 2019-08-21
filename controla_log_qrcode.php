<?php

$conteudo_log = file_get_contents('log_qrcode.txt');

$retorno = [
    'retorno' => 'ok',
    'conteudo' => $conteudo_log
];

echo json_encode($retorno);
?>