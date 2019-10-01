<?php

$arquivo = [];

$path = "logqrcode/";
$diretorio = dir($path);
while($arquivo = $diretorio -> read()){
    if ($arquivo == '.' || $arquivo == '..') {
        continue;
    }
    $arquivos[] = $arquivo;
}
$diretorio -> close();

$qtde_arquivos = count($arquivos);
if ($qtde_arquivos == 30) {
    unlink('logqrcode/'.$arquivos[1]);
}
$log_antigo = file_get_contents('logqrcode/log.txt');
$salva_log_antigo = file_put_contents('logqrcode/log_'.date('d_m_Y_H_i_s').'.txt', print_r($log_antigo, true));
$limpa_log = file_put_contents('logqrcode/log.txt', '');

?>
