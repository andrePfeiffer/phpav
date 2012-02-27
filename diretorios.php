<?php
header ('Content-type: text/html; charset=utf-8');

$diretorio = "contadores";
if(is_dir($diretorio)){
    $recurso = opendir($diretorio);
    while($filename = readdir($recurso)){
        if(is_file($diretorio . '/' . $filename)){
            echo $filename . '<br>';
        }
    }
    closedir($recurso);
}
