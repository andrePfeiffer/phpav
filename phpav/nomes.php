<?php
header ('Content-type: text/html; charset=utf-8');

$arquivo = fopen("nomes.txt", "r");
while($saida = fgets($arquivo)){
    echo $saida . '<br>';
}
fclose($arquivo);

require_once 'contador.php';

zip_open('phpav.zip');