<?php
$host = '127.0.0.1';

$mysql  = new mysqli($host, 'root', '', 'shop', 3308);

if(mysqli_connect_errno()){
    echo 'Connection error: ' .mysqli_connect_errno() . '#' .mysqli_connect_error();
}

$ret = $mysql->query("SELECT * FROM catalogs WHERE `name` = 'Процессоры'");

$data = [];
while ($element = $ret->fetch_assoc()){
    $data[] = $element;
}

echo 'affected rows: ' .$mysql->affected_rows . ' <br>';

echo 'result: <pre>' . print_r($data, 1) . '</pre>';


$ret = $mysql->query("INSERT FROM catalogs WHERE `name` = 'Процессоры'");