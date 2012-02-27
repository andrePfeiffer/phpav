<?php
header ('Content-type: text/html; charset=utf-8');

$arquivo = 'contador.php';
if(is_file($arquivo)){
    echo md5(file_get_contents($arquivo));
}
