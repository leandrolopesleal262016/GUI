<?php


if ($_REQUEST['arquivo'] == '') {
    $conteudo_log = file_get_contents('log/log.txt');
} else {
    $conteudo_log = file_get_contents('log/'.$_REQUEST['arquivo']);
}

$retorno = [
    'retorno' => 'ok',
    'conteudo' => $conteudo_log
];

echo json_encode($retorno);
?>