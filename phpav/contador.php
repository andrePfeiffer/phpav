<?php

$nomeArquivo = str_replace('.php', '', $_SERVER['PHP_SELF']);
$nomeArquivo = str_replace('.html', '', $nomeArquivo);
$nomeArquivo = str_replace('.htm', '', $nomeArquivo);
$nomeArquivo = str_replace('/', '_', $nomeArquivo);

$diretorio = 'contadores';
if(!is_dir($diretorio)){
    mkdir($diretorio);
}
$arquivo = $diretorio . '/' . $nomeArquivo . '.txt';
if(file_exists($arquivo)){
    $valorAtual = trim(file_get_contents($arquivo));
    $valorAtual++;
}else{
    $valorAtual = 1;
}
$ponteiro = fopen($arquivo, 'w');
fwrite($ponteiro, $valorAtual);
fclose($ponteiro);

