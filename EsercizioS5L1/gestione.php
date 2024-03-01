<?php

require_once 'config.php';

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO usertab (name, lastname, email, password) VALUES ('{$name}', '{$lastname}', '{$email}', '{$password}');";
if (!$mysqli->query($sql)) {
    echo ($mysqli->connect_error);
} else {
    echo 'Record aggiunto con successo!!!';
}


$dir = 'file/';
$file = 'users.csv';
$users = $mysqli->query('SELECT * FROM usertab');

if (!file_exists($dir)) {
    mkdir($dir, 0777);
}

$resource = fopen($dir . $file, 'w');
if ($resource) {
    foreach ($users as $user) {
        fputcsv($resource, $user, ';');
    }
    fclose($resource);
}

header('Location: index.php');