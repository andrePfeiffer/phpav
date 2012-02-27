<?php

$arquivoZip = 'phpav.zip';

$diretorio = str_replace('.zip', '', $arquivoZip);
if(!is_dir($diretorio)){
    mkdir($diretorio);
}

$recurso = zip_open($arquivoZip);

while($arquivo = zip_read($recurso)){
     $nomeArquivo = zip_entry_name($arquivo);
    copy($nomeArquivo, $diretorio . '/' . $nomeArquivo);
}
zip_close($recurso);