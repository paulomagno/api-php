<?php

$dbHost = 'localhost';
$dbName = 'devsnotes';
$dbUser = 'root';
$dbPass = '';
$array  = [];

$pdo = new PDO("mysql:dbname=$dbName;host=$dbHost",$dbUser,$dbPass);

$array = [
    'error'  => '',
    'result' => []
];

?>