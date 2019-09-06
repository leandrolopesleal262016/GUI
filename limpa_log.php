<?php

$log_antigo = file_get_contents('log.txt');
$salva_log_antigo = file_put_contents('log_antigo.txt', print_r($log_antigo, true));
$limpa_log = file_put_contents('log.txt', '');

?>