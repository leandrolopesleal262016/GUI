<?php

$conteudo_log = file_get_contents('log.txt');

$retorno = [
    'retorno' => 'ok',
    'conteudo' => $conteudo_log
];

echo json_encode($retorno);
?>