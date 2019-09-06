<?php

$log_antigo = file_get_contents('log_qrcode.txt');
$salva_log_antigo = file_put_contents('log_antigo_qrcode.txt', print_r($log_antigo, true));
$limpa_log = file_put_contents('log_qrcode.txt', '');

?>